$ zcat ./var/db.sql.gz > ./var/db.sql
$ sed -i 's/DEFINER=`yaroslav_n_magento_local`@`\%`/DEFINER=CURRENT_USER/g' ./var/db.sql
$ scp -P 33238 ./var/db.sql root@yaroslav-n-magento-local.allbugs.info:/tmp/
$ ssh root@yaroslav-n-magento-local.allbugs.info -p 33238
$ mysql -uroot -p --show-warnings
> CREATE DATABASE yaroslav_n_build;
> CREATE USER 'yaroslav_n_build_user'@'localhost' IDENTIFIED BY 'yaroslav_n_build';
> GRANT ALL ON yaroslav_n_build.* TO 'yaroslav_n_build_user'@'localhost';
> USE yaroslav_n_build
> SOURCE /tmp/db.sql
> exit
$ rm /tmp/db.sql
$ apt install rsync





$ su www-data
$ cd ~/domains/yaroslav-n-magento-local.allbugs.info/
$ mkdir ./build_system/
$ cd ./build_system/
$ git clone git@github.com:yaroslavnakonechniy/yaroslav-n-magento.git yaroslav-n-magento
$ git config core.fileMode false
$ git checkout 9-code-delivery # TEMPORARY! Must be same as production!
$ cp ./../http/auth.json ./
$ composer install --no-dev
$ git checkout ./pub/.htaccess .gitignore
$ cd ./app/etc/
$ ln -s env.build.php env.php
$ cd ./../../
$ php bin/magento app:config:import
$ php bin/magento config:set catalog/search/elasticsearch7_server_hostname localhost
$ php bin/magento setup:upgrade
$ php bin/magento deploy:mode:set production
