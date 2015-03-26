#!/bin/bash
name=$1
home=/usr/local/lpm
path=/home/$name

vpath=$home/vhost
file="$home/conf/mysql" 
mysqlpass=$(cat "$file")
dt=$(date +"%d-%m-%Y-t-%H-%M-%S")

cd $path
tar -czvf $name.tar.gz *
echo "dir compressed"
#mysql
mysqldump -u root -p'$mysqlpass'$name > $name.sql
echo "datbase copied"

tar -czvf del-$name-$dt.tar.gz $name.tar.gz $name.sql
rm -fr $name.tar.gz $name.sql
mv del-$name-$dt.tar.gz $home/deleted
mv $path/details.txt $home/deleted/$name-$dt.details.txt

mv $vpath/$name.conf $vpath/old/$name-$dt.conf
echo "completed"

//mkdir -p /home/bkp/oldprojects/$name/

echo "DROP DATABASE IF EXISTS $name;" | mysql --host=localhost --user=root --password=$mysqlpass
echo "DELETE FROM mysql.user WHERE User='$name';" | mysql --host=localhost --user=root --password=$mysqlpass
echo "Account Deleted:$name " $home/functions.txt
echo "Deleted Date : $dt" >> $home/functions.txt

rm -fr $path/ 
