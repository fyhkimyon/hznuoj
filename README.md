# HZNUOJ

**HZNUOJ 是基于 [HUSTOJ](https://github.com/zhblue/hustoj) 改造而来的，遵循 GPL 协议开源**

## 部署指南

### 使用 Docker（推荐）

### 构建镜像

在仓库根目录下：

```bash
docker build -t hznuoj:latest -f docker/Dockerfile ./
```

等待 build 完成即可。

完成后 `docker image ls`，若有看到 hznuoj 的镜像即为成功。

### 启动容器

```bash
docker run -it --restart=always -d \
-p 80:80 \
--name=hznuoj \
-v /var/hznuoj/static.php:/var/www/web/OJ/include/static.php \
-v /var/hznuoj/upload:/var/www/web/OJ/upload \
-v /var/hznuoj/data:/var/hznuoj/data \
hznuoj:latest
```

- `-p 80:80` 表示把容器的 80 端口映射到宿主机的 80 端口，可自行修改。
- `--name=hznuoj` 表示指定容器的名字为 `hznuoj`。
- `-v /var/hznuoj/static.php:/var/www/web/OJ/include/static.php` 表示将宿主机上的 `/var/hznuoj/static.php` 文件挂在到容器内的 `/var/www/web/OJ/include/static.php`。

然后访问 localhost:80 即可。

### 进入容器

```bash
docker exec -it hznuoj bash
```

## 使用教程

默认管理员账号为 admin/123456。

出题手册见 https://www.yuque.com/weilixinlianxin/zcf10d/yfk05w

## 优势

* 更华丽的界面
* 更灵活的权限管理
* 支持多组样例
* 有封装好的Docker镜像，一键部署

## 界面截图

### 首页

支持提交量和访问量的统计

![index](images/index.jpg)

### 榜单

重写过的的榜单

![board](images/board.jpg)

能点开查看每题的提交状况

![board2](images/board2.jpg)

### 题目编辑界面

![problem-edit](images/problem-edit.jpg)

多样例支持

![problem-edit](images/problem-edit2.jpg)

### 权限管理界面

细分的权限分配

![privilege](images/privilege.jpg)
