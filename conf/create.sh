#!/bin/bash
name=$1
pass=$2
type=$3

home=/usr/local/lpm
path=/home/$name

vpath=$home/vhost
dt=$(date +"%Y-%m-%d-T-%H-%M-%S")

file="$home/conf/mysql" 
mysqlpass=$(cat "$file")
mkdir -p $path 
mkdir $path/html
mkdir $path/bkp
touch $path/details.txt

#user add
#useradd $name
#usermod -d $path -s /sbin/nologin -g apache $name
#echo "$pass:$name" | chpasswd

echo "Project Name : $name " >> $path/details.txt
echo "Project Directory created"

if [ $type -eq 1 ]
then
cp -fr $home/data/php/* $path/html
echo "Core php program started Copied" 
echo "Project Type : Core PHP" >> $path/details.txt
echo "Created Time : $dt" >> $path/details.txt
elif [ $type -eq 2 ]
then
cp -fr $home/data/dp/* $path/html
echo "Drupal copied"
echo "Project Type : Drupal" >> $path/details.txt
echo "Created Time : $dt" >> $path/details.txt
elif [ $type -eq 3 ]
then
cp -fr $home/data/wp/* $path/html
echo "Wordpress copied"
echo "Project Type : Wordpress" >> $path/details.txt
echo "Created Time : $dt" >> $path/details.txt
else
cp -fr $home/data/html/* $path/html
  echo "Default page copied"
echo "Project Name : HTML" >> $path/details.txt
echo "Created Time : $dt" >> $path/details.txt
fi

#mysql
echo "CREATE DATABASE $name;CREATE USER $name@localhost;SET PASSWORD FOR $name@localhost= PASSWORD('$pass');GRANT ALL PRIVILEGES ON $name.* TO $name@localhost IDENTIFIED BY '$pass';FLUSH PRIVILEGES;" | mysql --host=localhost --user=root --password=$mysqlpass
echo "Database and user created"
echo "MySQL user : $name " >> $path/details.txt
echo "MySQL pass : $pass " >> $path/details.txt
echo "======================================" >> $path/details.txt
#virtual host
echo "#Virtual host congfiguration of $name "  >> $vpath/$name.conf
echo "<VirtualHost *:80>" >> $vpath/$name.conf
echo "DocumentRoot $path/html " >> $vpath/$name.conf
echo "ServerName $name.lpm.com " >> $vpath/$name.conf
echo "</VirtualHost>" >> $vpath/$name.conf
#echo "$name.lpm.com.       	IN  A           192.99.120.123" >> /var/named/lpm.com.fwd
echo "Virtual host Configured"
echo "Account Creation completed"
echo "Contact admin to point the hostname the project site"

echo $name-$dt >> $home/projects.txt





