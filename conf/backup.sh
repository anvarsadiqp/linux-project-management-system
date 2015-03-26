#!/bin/bash
name=$1
home=/usr/local/lpm
path=/home/$name

file="$home/conf/mysql" 
mysqlpass=$(cat "$file")
dt=$(date +"%d-%m-%Y-t-%H-%M-%S")

cd $path/html
tar -czf $name.tar.gz *
echo "dir compressed"
#mysql
mysqldump -u root -p'$mysqlpass'$name > $name.sql
echo "Datbase Copied"
tar -czf bkp-$name-$dt.tar.gz $name.tar.gz $name.sql
echo "completed"
echo "Bakup Taken :$dt" >> $path/details.txt
echo "File Name : bkp-$name-$dt.tar.gz" >> $path/details.txt
echo "Bakup Taken :$dt " >> $path/details.txt
echo "File Name : bkp-$name-$dt.tar.gz" >> $home/functions.txt
mv bkp-$name-$dt.tar.gz $path/bkp
rm -fr $name.tar.gz $name.sql

