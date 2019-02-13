echo 'deploy the solution...';
develop_dir="/var/www/success-career";
[ -d "$develop_dir" ] || mkdir "$develop_dir";
cp -r src/ "$develop_dir";
develop_dir_new="$develop_dir/src";
cd "$develop_dir_new";
chmod -R a+X wp-content/;
chmod -R 777 wp-content/;
echo 'Set up wp-config...';
cp wp-config-develop.php wp-config.php;
# Check dbname is exist mysql
db_dbname="success-career";
db_username="root";
db_password="Aa@123456";
result=`mysqlshow --user=$db_username --password=$db_password $db_dbname| grep -v Wildcard | grep -o $db_dbname`
if [ "$result" != "$db_dbname" ]; then
    echo "$db_dbname is not exist MYSQL";
    exit 1;
fi