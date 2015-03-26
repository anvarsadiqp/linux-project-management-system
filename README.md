# linux-project-managment-system
To manage php projects form a VPS 
(create and manage different php projects drupal,wordpress,corephp,html...)

<h2>Working functionality</h2><br>
+ CentOS<br>
+ Virtual Host<br>
+ mysql database<br>
<h2>Functions</h2><br>
<b>Creat a new project with database -> more details conf/create.sh<br></b>
      -> new dirctory for each projects under /home/<br>
      -> new database user with the given password<br>
      -> automatic virtual host files<br>
      -> log files<br>
<b>Backup your project with database -> more details conf/backup.sh<br></b>
      -> backup your database and project data<br>
      -> store the details in /home/*/bkp directory<br>
<b>Download backup for upload -> more details conf/backup.sh<br></b>
      -> take the backups of files and database.<br>
      -> set the default permission to files and folder<br>
<b>Delete the projects -> conf/download.sh<br></b>
      -> it will take the backup of current files and backups<br>
      -> the deleted project stored in deleted directories<br>
      -> 
<h2>For Support</h2>
If you need any kind of assistence please contact me
anvarsadiq@quizent.com
