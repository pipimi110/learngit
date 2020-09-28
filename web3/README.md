## web3

shell.php(留个后门方便使用)

mytest.php(测试数据库连接)

conn.php

> 改成mysql容器名
>
> 127.0.0.1->mysqltest

docker-compose

> 安装 pip install docker-compose

```
docker-compose up -d
```

> 还需要进入mysql容器配置含有flag的sql文件，对不起，是我太菜了

```
docker exec -it mysqltest /bin/bash;
mysql -uroot -proot;
use jkba;
source /home/web3.sql;
```

