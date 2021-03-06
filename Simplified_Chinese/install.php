<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Choose install language'		=>	'选择安装脚本的语言',
'Choose install language info'	=>	'本安装脚本所使用的语言。论坛所使用的默认语言将在接下来的安装过程中设置。',
'Install language'				=>	'安装使用语言',
'Change language'				=>	'变更语言',
'Next'							=>	'下一步',
'Already installed'				=>	'FluxBB 似乎已安装。请点击<a href="index.php">此链接</a>前往。',
'You are running error'			=>	'您的 %1$s 版本为 %2$s。 FluxBB %3$s 至少需要 %1$s %4$s 方可正确运行。您在继续之前，必须升级您的 %1$s 设置。',
'My FluxBB Forum'				=>	'我的FluxBB论坛',
'Description'					=>	'FluxBB是什么？需要您用心体会。',
'Username 1'					=>	'用户名长度不可少于2个字符。',
'Username 2'					=>	'用户名长度不可超过25个字符。',
'Username 3'					=>	'guest 是保留的用户名。',
'Username 4'					=>	'用户名的格式不允许是 IP 地址式。',
'Username 5'					=>	'用户名不可一次包含字符 \'、 " 与 [ 或 ] 。请重新选择用户名。',
'Username 6'					=>	'用户名不可包含本论坛所使用的文本样式标签(BBCode)。',
'Short password'				=>	'密码长度不可少于4个字符。',
'Passwords not match'			=>	'密码不匹配。',
'Wrong email'					=>	'您填写的管理员电子信箱地址无效。',
'No board title'				=>	'您必须填写论坛标题。',
'Error default language'		=>	'所选的默认语言似乎不存在。',
'Error default style'			=>	'所选的默认风格似乎不存在。',
'No DB extensions'				=>	'现有 PHP 环境不具备 FluxBB 所需的任何格式的数据库。为使 FluxBB 能被安装，PHP 必须已包含 MySQL、PostgreSQL或SQLite。',
'Administrator username'		=>	'管理员用户名',
'Administrator password 1'		=>	'管理员密码1',
'Administrator password 2'		=>	'管理员密码2',
'Administrator email'			=>	'管理员电子信箱',
'Board title'					=>	'论坛标题',
'Base URL'						=>	'根目录网址(不包含结尾的斜杠)，务必正确设置',
'Required field'				=>	'在该表格中是必填项。',
'FluxBB Installation'			=>	'FluxBB 安装向导',
'Welcome'						=>	'您将要安装 FluxBB。继续安装前您必须完成填写以下表格。遇到任何安装问题，请参考帮助文档。',
'Install'						=>	'安装 FluxBB %s',
'Errors'						=>	'下列错误须要修正：',
'Database setup'				=>	'数据库设置',
'Info 1'						=>	'用于连接您的数据库的所有信息。',
'Select database'				=>	'选择数据库类型',
'Info 2'						=>	'FluxBB 目前支持 MySQL， PostgreSQL 以及 SQLite。',
'Database type'					=>	'数据库类型',
'Required'						=>	'(必需)',
'Database hostname'				=>	'填写数据库服务器的主机名',
'Info 3'						=>	'如果<code>localhost</code>无效，您需要联系空间运营商获取。',
'Database server hostname'		=>'数据库服务器主机名',
'Database enter name'			=>	'填写数据库名',
'Info 4'						=>	'用于安装FluxBB的数据库的名称。',
'Database name'					=>	'数据库名',
'Database enter informations'	=>	'填写您数据库的用户名及密码',
'Database username'				=>	'数据库用户名',
'Info 5'						=>	'您的MySQL数据库的用户名及密码(如使用SQLite请忽略)。',
'Database password'				=>	'数据库密码',
'Database enter prefix'			=>	'填写数据库表前缀',
'Info 6'						=>	'如果您需要在同一个数据库安装多个FluxBB论坛，请修改此项。',
'Table prefix'					=>	'数据表前缀',
'Administration setup'			=>	'管理员设置',
'Info 7'						=>	'创建论坛的第一个用户。',
'Info 8'						=>	'用户名长度须在2至25字符之间，密码至少4个字符，谨记密码是区分大小写的。',
'Password'						=>	'密码',
'Confirm password'				=>	'确认密码',
'Board setup'					=>	'论坛设置',
'Info 11'						=>	'配置论坛选项，以后可以修改。',
'General information'			=>	'论坛标题和描述',
'Board description'				=>	'论坛描述，支持HTML',
'Appearance'					=>	'外观',
'Info 15'						=>	'配置您的论坛，选择默认风格和语言。',
'Default language'				=>	'默认语言',
'Default style'					=>	'默认风格',
'Start install'					=>	'开始安装',
'DB type not valid'				=>	'\'%s\' 不是一个有效的数据库类型',
'Table prefix error'			=>	'数据表前缀 \'%s\' 包含非法字符或过长。表前缀可包含字母 a 至 z，任何数字以及下划线。并且不能以数字开头。长度不超过40个字符。请另选表前缀',
'Prefix reserved'				=>	'数据表前缀 \'sqlite_\' 是专为 SQLite 引擎保留的名称。请另选表前缀',
'Existing table error'			=>	'数据库 \'%s\'中已经存在数据表 \'%susers\'。这可能表示 FluxBB 已曾安装或另一个已安装的软件占用了 FluxBB 所需的一个或多个数据表名称。如您准备在同一数据库中安装多个 FluxBB 副本，您必须选择一个不同的表前缀。',
'InnoDB off'					=>	'InnoDB 似乎不可用。请另选一个无 InnoDB 支持的数据库层，或在您的 MySQL服务器上启用 InnoDB',
'Administrators'				=>	'管理员',
'Administrator'					=>	'管理员',
'Moderators'					=>	'版主',
'Moderator'						=>	'版主',
'Guests'						=>	'访客',
'Guest'							=>	'访客',
'Members'						=>	'用户',
'Announcement'					=>	'在此填写您要发布的公告。',
'Rules'							=>	'在此填写论坛服务条款',
'Maintenance message'			=>	'论坛维护中。请稍后访问。',
'Test post'						=>	'示例帖子',
'Message'						=>	'如果您在阅读这个帖子(我猜正是如此)，安装的 FluxBB 已经开始工作！现在您可以登录，并进入顶部的管理设置面板来配置您的论坛。',
'Test category'					=>	'测试分类',
'Test forum'					=>	'测试版块',
'This is just a test forum'		=>	'这只是一个测试版块',
'Alert cache'					=>	'<strong>缓存所在目录不可写！</strong>为使 FluxBB 功能正常，必须为目录 <em>%s</em> 开启 PHP 写入权限。使用 chmod 命令设置恰当的目录权限。如有疑问，用 chmod 设为0777。',
'Alert avatar'					=>	'<strong>头像所在目录不可写！</strong>如果您准备允许用户上传自定义头像，您必须确认已为目录 <em>%s</em> 开启了 PHP 写入权限。稍后您可为用户上传的头像文件选择指定的目录(见 管理设置/配置选项)。使用 chmod 命令设置恰当的目录权限。如有疑问，用 chmod 设为0777。',
'Alert upload'					=>	'<strong>该服务器似乎不允许上传文件！</strong>如果您准备允许用户上传自定义头像，您必须开启 PHP 中的 file_uploads 配置设置。上传功能一旦可用，可在 管理设置/配置选项/头像 中开启。',
'FluxBB has been installed'		=>	'FluxBB 已安装结束。请遵循以下指示完成安装向导。',
'Final instructions'			=>	'最后一步',
'Info 17'						=>	'为完成安装，您需要点击下示按钮以下载名为 config.php 的文件。然后上传它至您已安装的 FluxBB 程序的根目录下。',
'Info 18'						=>	'一旦您上传完 config.php，FluxBB 就安装成功了！随后您便可 <a href="index.php">进入论坛首页</a>。',
'Download config.php file'		=>	'下载 config.php 文件',
'FluxBB fully installed'		=>	'FluxBB 已经安装成功！您现在可 <a href="index.php">点此访问论坛首页</a>。',

);
