<?php
// include '../../classes/course.class.php';
$op = $obj->getSubject('SELECT module FROM subject WHERE subject_code = "' . $_SESSION['subject_code'] . '"');

var_dump($_POST);
var_dump($_SESSION);

?>
<form action="course-content.php" method="POST">
  <textarea name="textmodule" style="overflow-y:scroll;width:100%;height:450px">

    <?php echo  $op[0]['module']; ?>
  </textarea>
  <!-- 
    <h4>Course Description</h4>
    <p>
      This course offers fundamental concepts of computer and computing which includes introduction to computer system, computer software & database management system, operating system, data communication & computer network and contemporary technologies. It also aims at helping students convert theoretical concept into practical skill through the use of different application packages including word processor, spreadsheet package, presentation package and photo editing graphical package.
    </p>


    <h4>Course Objectives</h4>
    <p>
      The general objectives of this course are to provide fundamental concepts of information and communication technology and to make students capable of using different application packages in their personal as well as professional life.
    </p>


    <h4>Units and Unit Content </h4>
    <h5>1. Introduction to Computer System</h5>
    <p>
      teaching hours: 16 hrs
      Introduction to Computer, Characteristics of Computer, Applications of Computer, Classifications of Computer, Mobile Computing, Anatomy of Digital Computer, Computer Architecture, Memory and its Classifications, Input devices, Output devices, Interfaces.
    </p>
    <h5>2. Computer Software</h5>
    <p>
      teaching hours: 3 hrs
      Introduction to Software, Types of Software, Program vs Software, Computer Virus and antivirus.
    </p>
    <h5>3. Operating System</h5>
    <p>
      teaching hours: 4 hrs
      Introduction to Operating System, Function of Operating System, Types of Operating System, Open Source Operating System.
    </p>
    <h5>4. Database Management System</h5>
    <p>
      teaching hours: 8 hrs
      Introduction to DBMS, Database Models, SQL, Database Design and Data Security, Data Warehouse, Data Mining, Database Administrator
    </p>
    <h5>5. Data Communication and computer Network</h5>
    <p>
      teaching hours: 10 hrs
      Introduction to Communication system, Mode of Communication, Introduction to Computer Networks,Types of Computer Networks, LAN Topologies,Transmission Media, Network Devices, OSI References Model, Communication Protocols, Centralized vs Distributed System.
    </p>
    <h5>6. Internet and WWW</h5>
    <p>
      teaching hours: 6 hrs
      Internet: Introduction to internet and its applications, Connecting to the Internet , Client/Server Technology, Internet as a Client/Server Technology, Email, Video-Conferencing, Internet Service Providers, Domain, Name Server, Internet Address, Internet Protocols, (IP, TCP, HTTP, FIP, SMTP, POP, Telnet, Gopher, WAIS), Introduction to Intranet, Internet vs Intranet vs Extranet, Advantages and Disadvantages of Intranet

      World Wide Web(WWW): World Wide Web and its Evolution, Architecture of Web and its Evolution, , Architecture of Web, Uniform Resource Locator(URL), Browsers: Internet Explorer, Netscape Navigator, Opera, Firefox, Chrome, Mozilla; Search Engine, Web Servers: Apache, IIS, Proxy Server, HTTP Protocol, FTP protocol
    </p>


    <h5>7. Contemporary Technologies</h5>
    <p>
      teaching hours: 13 hrs
      Multimedia, e-Commerce, e-Learning,e-Governance,e-Banking, Hypermedia, Geographical Information System, Virtual Reality, Augmented Realty, Artificial Intelligence, Ambient Intelligence, Robotics, Bit Coin.
    </p>
 -->


  <button type="md-submit" class="btn btn btn-primary" name="submit">Save</button>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
    });
</script>

<?php $carticle = ""; ?>