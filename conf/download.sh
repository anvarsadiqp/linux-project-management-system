#!/bin/bash
name=$1
home=/usr/local/lpm
path=/home/$name

file="$home/conf/mysql" 
mysqlpass=$(cat "$file")
dt=$(date +"%d-%m-%Y-t-%H-%M-%S")


find $path/html -type d -exec chmod 755 {} \;
find $path/html -type f -exec chmod 644 {} \;
chown -R $data.$data $path/html/*


cd $path/html

tar -czf $name.tar.gz *
echo "dir compressed"
#mysql
mysqldump -u root -p'$mysqlpass'$name > $name.sql
echo "datbase copied"

tar -czf dwn-$name-$dt.tar.gz $name.tar.gz $name.sql

rm -fr $name.tar.gz $name.sql

mv dwn-$name-$dt.tar.gz $path/bkp

echo "Bakup Taken 4 Dowload:$dt "  >> $path/details.txt
echo "File Name : bkp-$data-$dt.tar.gz" >> $path/details.txt
echo "Bakup Taken 4 Dowload:$dt "  >> $path/details.txt
echo "File Name : bkp-$data-$dt.tar.gz" >> $home/functions.txt
