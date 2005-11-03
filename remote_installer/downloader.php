<?php
defined('_VALID_MOS') or die('Direct access to this location is not allowed.');
////////////////////////////////////////////////////////////////////////////////
//                                                                              
// Project   : Server to Server Transfer [SST] 2                                
// Filename  : downloader.php                                                   
// Purpose   : HTTP Downloader Implementation                                   
// Version   : 2.1                                                              
// Author    : James Azarja                                                     
//                                                                              
// How to:                                                                      
// -> Create the class                                                          
//      require_once("downloader.php");                                         
//      $downloader = new classDownloader;                                      
// -> Download a file                                                           
//      $downloader->download(<source_url>,<local_filename>)                    
//                                                                               
function status( $msg ) {
        
        echo "<span class=\"message\">$msg</span><br />";
        //sleep( 2 );
        
}

class classDownloader
{
        var $url            = ""; // (string) Requested URL

        var $useragent      = ""; // (string) User Agent signature (act as ?)
        var $referer        = ""; // (string) Referer URL
        var $accept         = ""; // (string) Accept what ?
        var $userid         = ""; // (string) HTTP Authentication Userid
        var $password       = ""; // (string) HTTP Authentication Password

        var $proxyaddr      = ""; // (string) Use Proxy ?
        var $proxyport      = ""; // (string) Proxy port ?
        var $contenttype    = "";

        var $timeout        = 30;
        var $errorid        = 0;
        var $errormsg       = "";

        /* Respone */
        var $replyheader    = array();
        var $replybody      = "";
        var $replyproto     = "";
        var $replyversion   = "";
        var $replycode      = 0;
        var $replymsg       = "";
        var $redirected     = "";
        var $historyurl     = array();
        var $lasturl        = ""; // (string) Last request URL.
        
        ####################################################################
        # Public Function

        function GetReplyHeaderValue($field)
        {
                reset($this->replyheader);
                        while (list($key, $header) = each ($this->replyheader))
                        {
                                if ($key==0) continue;
                                if (!(strpos($header,$field)=== false))
                                {
                                                return trim(substr($header,
                                                         strpos($header,":")+1,
                                                         strlen($header)-strpos($header,":")+1));
                                }
                        }
                        return "";
        }

        function Reset()
        {
                $this->url        = "";
                $this->useragent  = "";
                $this->referer    = "";
                $this->accept     = "";
                $this->proxyaddr  = "";
                $this->proxyport  = "";
                $this->userid     = "";
                $this->password   = "";
                $this->timeout    = 30;
                $this->lasturl    = "";
                $this->replyheader= array();
                $this->replybody  = "";
                $this->replycode  = 0;
                $this->replymsg   = "";
                $this->replyproto = "";
                $this->replyversion = "";
                $this->historyurl = array();
        }

        function Get()
        {
                do
                {
                        
                        $this->lasturl = $this->url;
                        $redirection = "";

                        $parsedurl = parse_url($this->url);
                        $this->historyurl[]=$this->url;
                        $useproxy = (($this->proxyaddr != "") && ($this->proxyport != ""));
                        
                        if (!$useproxy)
                        {
                                $host = $parsedurl["host"];
                                $port = $parsedurl["port"];
                                $hostname = $host;
                        } else
                        {
                                $host = $this->proxyaddr;
                                $port = $this->proxyport;
                                $hostname = $parsedurl["host"];
                        }

                        $port = $port ? $port : "80";

                        $sockethandle=fsockopen($host,$port,$errid,$errmsg,30);
                        status("Opening connection to $host");

                        if (!$sockethandle)
                        {
                                status("Can't connect to $host");
                                return false;
                        } else
                        {
                                // socket_set_timeout($sockhandle, $timeout);
                                if (!$parsedurl["path"])
                                $parsedurl["path"]="/";

                                status("Sending request...");
                                $request = "";
                                if (!$useproxy)
                                {
                                        $request.= "GET ".$parsedurl["path"].($parsedurl["query"] ? '?'.$parsedurl["query"] : '')." HTTP/1.0\r\n";
                                        $request.= "Host: $hostname\r\n";
                                } else
                                {
                                        $request.= "GET ".$this->url." HTTP/1.0\r\n";
                                        $request.= "Host: $hostname\r\n";
                                }
                                if ($this->referer!="")
                                        { $request.= "Referer: $this->referer\r\n"; }
                                if ($this->useragent!="")
                                        { $request.= "User-Agent: $this->useragent\r\n";}
                                if ($this->accept!="")
                                        { $request.= "Accept: $this->accept\r\n";}
                                if (($this->password!="") || ($this->userid!=""))
                                {
                                    $request.= "Authorization: Basic ".base64_encode($this->userid.":".$this->password)."\r\n";
                                }
                                $request.= "\r\n";

                                /* Send The Request */
                                fwrite($sockethandle, $request);

                                $result = "";
                                $maxsize=1048576*5;
                                status("Waiting for reply...");
                                while (!feof($sockethandle))
                                {
                                        $size = strlen($result);
                                        if ($size>$maxsize)
                                        {
                                                status("Content size is too big (maximum: $maxsize)");
                                                return false;
                                        }
                                        //status("Downloading from server [".strlen($result)." bytes]");
                                        $result.= fread($sockethandle,4096);
                                        if ($result=="")
                                        { return false; }
                                        echo " ";
                                }

                                fclose ($sockethandle);

                                status("Checking server reply...");
                                $contentpos = strpos ($result,"\r\n\r\n");

                                $this->replyheader     = split("\r\n",substr($result,0,$contentpos+2));
                                $this->replybody       = substr($result,$contentpos+4,strlen($result)-($contentpos+4));

                                /* Parsing Header */
                                if (ereg("([A-Z]{4})/([0-9.]{3}) ([0-9]{3})",$this->replyheader[0],$regs))
                                {
                                        $this->replyproto      = $regs[1];
                                        $this->replyversion    = $regs[2];
                                        $this->replycode       = $regs[3];
                                        $this->replymsg        = substr($this->replyheader[0],
                                                                                                                                                strpos($this->replyheader[0],$this->replycode)+strlen($this->replycode)+1,
                                                                                                                                                strlen($this->replyheader[0])-strpos($this->replyheader[0],$this->replycode)+1);
                                }

                                if ($redirection = $this->getreplyheadervalue("Location"))
                                {
                                        $this->redirected = true;
                                        if ((strpos ($redirection,"http://")===false))
                                        {
                                                $this->url = dirname($this->lasturl)."/".$redirection; 
                                        } else
                                        {
                                                $this->url = $redirection;
                                        }
                                }
                                
                                if (!$redirection) return true;
                        }
                        
                }
                while (1); 
        }

        function Download($strURL, $strFilename="", $status=true, $strUsername="", $strPassword="")
        {
                $this->url			= $strURL;
                $this->useragent 	= "Server to Server Transfer [SST] (http://www.jazarsoft.com)";
                $this->userid 	 	= $strUsername;
                $this->password 	= $strPassword;
                
                status("Requesting..");
                if (!$this->Get())
                {
                        status("Error downloading from $strURL");
                        return false;
                } else
                {
                        status(strlen($this->replybody)." bytes downloaded.");
                }
                
                if ($this->replycode!=200 && $this->replycode!=302)
                {
                        status("HTTP Error Code : ".$this->replycode);
                        return false;
                }
                
                if (!$strFilename)
                {
                        $strFilename=dirname(__FILE__)."/".basename($strURL);
                        $strFilename=eregi_replace("[\\]","/",$strFilename);
                } else
                {
                        if (is_dir($strFilename))
                        {
                                $strFilename .= basename($strURL);
                        }
                }
                
                status("Saving to : ".$strFilename." [".strlen($this->replybody)." bytes] ");
                $fh = fopen($strFilename,"w");
                fwrite($fh, $this->replybody);
                fclose($fh);
                
        }
        
}
?>
