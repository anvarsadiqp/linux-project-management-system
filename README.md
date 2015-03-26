# linux-project-managment-system<br>
This is developed for my Quizent buddies :) for their projects managment<br>
The use of this project is manage php projects form a server <br>
Create and manage different type of php projects(drupal,wordpress,core php,html...) from a server.<br>
It will copy the default project contents form the server (we need to upload to the server.<br>
<h2>Working functionality</h2><br>
+ CentOS<br>
+ Virtual Host<br>
+ mysql database<br>
+ bash + php
+ web interface
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
-> find $path/html -type d -exec chmod 755 {} \;
-> find $path/html -type f -exec chmod 644 {} \;
<b>Delete the projects -> conf/download.sh<br></b>
      -> it will take the backup of current files and backups<br>
      -> the deleted project stored in deleted directories<br>
      -> 
<b>Strore the log of projects
      -> project level /home/*/details.txt
      -> Admin lever projects.txt AND functions.txt
<h2>For Support</h2>
If you need any kind of assistence please contact me
anvarsadiq@quizent.com
