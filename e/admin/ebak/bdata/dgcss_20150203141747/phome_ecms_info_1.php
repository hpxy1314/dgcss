<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_info`;");
E_C("CREATE TABLE `phome_ecms_info` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `classid` smallint(5) unsigned NOT NULL default '0',
  `ttid` smallint(5) unsigned NOT NULL default '0',
  `onclick` int(10) unsigned NOT NULL default '0',
  `plnum` mediumint(8) unsigned NOT NULL default '0',
  `totaldown` mediumint(8) unsigned NOT NULL default '0',
  `newspath` varchar(20) NOT NULL default '',
  `filename` varchar(36) NOT NULL default '',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `firsttitle` tinyint(1) NOT NULL default '0',
  `isgood` tinyint(1) NOT NULL default '0',
  `ispic` tinyint(1) NOT NULL default '0',
  `istop` tinyint(1) NOT NULL default '0',
  `isqf` tinyint(1) NOT NULL default '0',
  `ismember` tinyint(1) NOT NULL default '0',
  `isurl` tinyint(1) NOT NULL default '0',
  `truetime` int(10) unsigned NOT NULL default '0',
  `lastdotime` int(10) unsigned NOT NULL default '0',
  `havehtml` tinyint(1) NOT NULL default '0',
  `groupid` smallint(5) unsigned NOT NULL default '0',
  `userfen` smallint(5) unsigned NOT NULL default '0',
  `titlefont` varchar(14) NOT NULL default '',
  `titleurl` varchar(200) NOT NULL default '',
  `stb` tinyint(3) unsigned NOT NULL default '1',
  `fstb` tinyint(3) unsigned NOT NULL default '1',
  `restb` tinyint(3) unsigned NOT NULL default '1',
  `keyboard` varchar(80) NOT NULL default '',
  `title` varchar(100) NOT NULL default '',
  `newstime` int(10) unsigned NOT NULL default '0',
  `titlepic` varchar(120) NOT NULL default '',
  `smalltext` text NOT NULL,
  `myarea` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_info` values('1','11','0','5','0','0','','1','0','游客*','0','0','0','0','0','1','0','1355124448','1355124448','1','0','0','','/dgcss//info/fwxx/fwqz/1.html','1','1','1','','德外/新房/急于出租','1355124448','','租金:1400元 房型: 两居 \r\n两居，我和男朋友住其中的一间，出租另一间，设施齐全。房子是新房，屋内有电视，书桌，床，空调等，公用的有冰箱，洗衣机，燃气热水器等。交通方便，，购物方便，附近的超市有物美，楼下就是工商银行，北京银行及移动营业厅等。离地铁站步行只有10分钟左右。望招租女孩或夫妻同住，中介自重免扰！','东城区');");
E_D("replace into `phome_ecms_info` values('2','11','0','1','0','0','','2','0','游客*','0','0','0','0','0','1','0','1355124449','1355124449','1','0','0','','/dgcss//info/fwxx/fwqz/2.html','1','1','1','','德外/新房/急于出租','1355124449','','租金:1400元 房型: 两居 \r\n两居，我和男朋友住其中的一间，出租另一间，设施齐全。房子是新房，屋内有电视，书桌，床，空调等，公用的有冰箱，洗衣机，燃气热水器等。交通方便，，购物方便，附近的超市有物美，楼下就是工商银行，北京银行及移动营业厅等。离地铁站步行只有10分钟左右。望招租女孩或夫妻同住，中介自重免扰！','东城区');");
E_D("replace into `phome_ecms_info` values('3','11','0','18','0','0','','3','0','游客*','0','0','0','0','0','1','0','1355124450','1355124450','1','0','0','','/dgcss//info/fwxx/fwqz/3.html','1','1','1','','德外/新房/急于出租','1355124450','','租金:1400元 房型: 两居 \r\n两居，我和男朋友住其中的一间，出租另一间，设施齐全。房子是新房，屋内有电视，书桌，床，空调等，公用的有冰箱，洗衣机，燃气热水器等。交通方便，，购物方便，附近的超市有物美，楼下就是工商银行，北京银行及移动营业厅等。离地铁站步行只有10分钟左右。望招租女孩或夫妻同住，中介自重免扰！','东城区');");
E_D("replace into `phome_ecms_info` values('4','12','0','0','0','0','','4','0','游客*','0','0','0','0','0','1','0','1355124451','1355124451','1','0','0','','/dgcss//info/fwxx/fwcz/4.html','1','1','1','','地安门2居室','1355124451','','租金:2300元 房型: 两居 \r\n地安门商场对面2居室，65平米，精装修，家电全齐。随时看房，随时入住。','西城区');");
E_D("replace into `phome_ecms_info` values('5','12','0','0','0','0','','5','0','游客*','0','0','0','0','0','1','0','1355124452','1355124452','1','0','0','','/dgcss//info/fwxx/fwcz/5.html','1','1','1','','马甸附近','1355124452','','租金:2500元 房型: 两居 \r\n房子是在国美电器的后面，离车站走路两三分钟，在一层，家电家具都有，另个有三间平房，可作库房.','海淀区');");
E_D("replace into `phome_ecms_info` values('6','12','0','0','0','0','','6','0','游客*','0','0','0','0','0','1','0','1355124453','1355124453','1','0','0','','/dgcss//info/fwxx/fwcz/6.html','1','1','1','','距积水潭地铁步行5分钟','1355124453','','租金:850元 房型: 四居 \r\n房子位置非常好，步行五分钟到积水潭地铁，交通便利，家电齐全。注：房子是转租的，由于我们买房了，现在把房子转租出去,有意者请与我联系！','宣武区');");
E_D("replace into `phome_ecms_info` values('7','14','0','0','0','0','','7','0','游客*','0','0','0','0','0','1','0','1355124454','1355124454','1','0','0','','/dgcss//info/fwxx/fwcs/7.html','1','1','1','','CBD写字楼茶餐厅出租出售','1355124454','','租金:0元  \r\n价格: 面议   现有280多平米的茶餐厅出租内部精装修各种手续齐全可做咖啡厅洒吧餐厅等一起使用,地处北京市顺义区空港工业区科技大厦CBD写字楼毗邻30家以上的大公司可供二三百人以上就餐.','宣武区');");
E_D("replace into `phome_ecms_info` values('8','15','0','0','0','0','','8','0','游客*','0','0','0','0','0','1','0','1355124455','1355124455','1','0','0','','/dgcss//info/fwxx/bgyf/8.html','1','1','1','','华威桥附近三居出租','1355124455','','租金:2500元  \r\n本房屋精装修，交通便利，购物方便，小区环境好','朝阳区');");
E_D("replace into `phome_ecms_info` values('9','15','0','3','0','0','','9','0','游客*','0','0','0','0','0','1','0','1355124456','1355124456','1','0','0','','/dgcss//info/fwxx/bgyf/9.html','1','1','1','','中服大厦出租','1355124456','','租金:4元  \r\n中服大厦座落在举世闻名的长安街与高级写字楼云集的东三环之交汇处，西面正对国际贸易中心，南靠摩托罗拉大厦和惠普大厦，北临京广中心。大厦总建筑面积为38000平方米，共31层，其中5-27层为写字楼，1-4层为商场，地下1-2层为设备层和车库。中服大厦是一座集多功能服务、豪华商场为一体、采用先进电脑管理系统进行管理的高级写字楼。','朝阳区');");
E_D("replace into `phome_ecms_info` values('10','18','0','0','0','0','','10','0','游客*','0','0','0','0','0','1','0','1355124457','1355124457','1','0','0','','/dgcss//info/tzsc/dnpj/10.html','1','1','1','','自用台式电脑','1355124457','','交易价格:1300元\r\np4 1.4硬盘 40内存 382显卡fx5200 128m光驱 软驱 网卡 猫一应俱全本机器不仅可用于日常的办公，更可以胜任目前所有的主流游戏，象cs、魔兽等游戏','东城区');");
E_D("replace into `phome_ecms_info` values('11','18','0','1','0','0','','11','0','游客*','0','0','0','0','0','1','0','1355124458','1355124458','1','0','0','','/dgcss//info/tzsc/dnpj/11.html','1','1','1','','最低10元转让电脑、网络配件','1355124458','','交易价格:10元\r\n旧电脑淘汰，剩下一对东东，看看有没有您需要的，过来拿呀！CPU ：CY400一个、CY433一个，CY300A一个，都要30元拿走。adsl猫一个（维帆KM300A大猫，速度很快，非常稳定），4口路由器一个（金浪），16口交换机一个（腾达），都要200元拿走。另外还有两个空机箱，奔4的，20元一个；1块有问题的P3主板(键盘接口有点问题，但是USB口可以用）694X 30元。有需要的朋友请电话联系我，我在滨河地区。','昌平区');");
E_D("replace into `phome_ecms_info` values('12','18','0','0','0','0','','12','0','游客*','0','0','0','0','0','1','0','1355124459','1355124459','1','0','0','','/dgcss//info/tzsc/dnpj/12.html','1','1','1','','出售电脑配件及数码产品','1355124459','','交易价格:75元\r\nU盘爱国者贵宾王1GB：132元郎科1GB 130元清华紫光1GB 75元MP4纽曼512MB：399元 2GB：520元数码相机，摄像机电池索尼NP：日本进口，315元佳能NB：日本进口，329元尼康EN-EL3e，446元 D100专用电池590元金士顿SD卡2GB，149元电池更多品牌和型号请打电话查询 耳机：索尼 149元硬盘：三星80G 7200转，349元 光驱：三星18X DVD白金版，295元墨盒：爱普生 T057黑色，45元 惠普C8817A彩色，155元 惠普一体机彩色， 156元激光打印墨盒：390元，黑色 ','宣武区');");
E_D("replace into `phome_ecms_info` values('13','19','0','0','0','0','','13','0','游客*','0','0','0','0','0','1','0','1355124460','1355124460','1','0','0','','/dgcss//info/tzsc/dnsm/13.html','1','1','1','','二手松下CD机','1355124460','','交易价格:500元\r\n我有一个便携CD机想出售，价格：500 有意者请与我联系。','崇文区');");
E_D("replace into `phome_ecms_info` values('14','19','0','0','0','0','','14','0','游客*','0','0','0','0','0','1','0','1355124461','1355124461','1','0','0','','/dgcss//info/tzsc/dnsm/14.html','1','1','1','','求购8成新1000元左右数码照相机','1355124461','','交易价格:0元\r\n价格: 求购8成新成新1000元左右,我想买八成新数码照相机 照相机要求效果好 相数在四百左右 有的和我联系','崇文区');");
E_D("replace into `phome_ecms_info` values('15','19','0','2','0','0','','15','0','游客*','0','0','0','0','0','1','0','1355124462','1355124462','1','0','0','','/dgcss//info/tzsc/dnsm/15.html','1','1','1','','全新的 奥林巴斯 OLYMPUS RC-100 遥控器','1355124462','','交易价格:0元\r\n价格: 全新的 奥林巴斯 OLYMPUS RC-100 遥控器 卖50元吧 谁有用给钱拿走!短信联糸 西三坏花园桥自取 别打电话不够电话费呢','宣武区');");
E_D("replace into `phome_ecms_info` values('16','20','0','0','0','0','','16','0','游客*','0','0','0','0','0','1','0','1355124463','1355124463','1','0','0','','/dgcss//info/tzsc/txcp/16.html','1','1','1','','转让256M TF卡(全新)没有用过哦','1355124463','','交易价格:0元\r\n价格: 因为买手机的时候赠送256M TF卡,觉得内存太小,又买了一张512M的TF卡,所以,现在转让256M TF卡卖45元吧!全新,没有用过哦!','昌平区');");
E_D("replace into `phome_ecms_info` values('17','20','0','0','0','0','','17','0','游客*','0','0','0','0','0','1','0','1355124464','1355124464','1','0','0','','/dgcss//info/tzsc/txcp/17.html','1','1','1','','转让诺基亚 BH800/BH-800 蓝牙耳机','1355124464','','交易价格:0元\r\n价格: 转让全新蓝牙耳机，全新没用过，价格130元，适用所有蓝牙1.0、1.1、1.2、2.0版本支持的手机,另有全新的诺基亚BL-6C行货英文原装电池有需要的朋友请联系我.','宣武区');");
E_D("replace into `phome_ecms_info` values('18','20','0','0','0','0','','18','0','游客*','0','0','0','0','0','1','0','1355124465','1355124465','1','0','0','','/dgcss//info/tzsc/txcp/18.html','1','1','1','','摩托罗拉手机6成新','1355124465','','交易价格:100元\r\n摩托罗拉T189,我一直在使用着,待机时间5天,接打电话信号好,短消息可以拼音,数字,字母,笔画等等.一电一充,价格不议.自取.','东城区');");
E_D("replace into `phome_ecms_info` values('19','20','0','0','0','0','','19','0','游客*','0','0','0','0','0','1','0','1355124466','1355124466','1','0','0','','/dgcss//info/tzsc/txcp/19.html','1','1','1','','木制双门衣柜','1355124466','','交易价格:0元\r\n价格: 木制双门衣柜,有一面门上有境子,黄色的,要搬家了,意思一下就拿走.东西在海淀区颐和园附近．６０元．','朝阳区');");
E_D("replace into `phome_ecms_info` values('20','23','0','0','0','0','','20','0','游客*','0','0','0','0','0','1','0','1355124467','1355124467','1','0','0','','/dgcss//info/tcsh/bdxw/20.html','1','1','1','','自己养的小猫出售','1355124467','','3月6日出生,暹罗猫,海豹重点色,共五只,4月6日满月,现接受预订!!(每只300元) 有喜欢小猫的请与我联系!','石景山区');");
E_D("replace into `phome_ecms_info` values('21','23','0','0','0','0','','21','0','游客*','0','0','0','0','0','1','0','1355124468','1355124468','1','0','0','','/dgcss//info/tcsh/bdxw/21.html','1','1','1','','清华.北大“状元之路”无锡巡回演讲','1355124468','','由北大青年状元文化研究会，无锡科教在线教育培训中心联合推出了“状元之路”演讲报告会将于2007年4月中旬在无锡隆重举行。此次活动受到无锡市江阴市各大高级中学的大力支持和欢迎。欢迎各家长携莘莘学子报名参加。活动将有北大、清华状元直接与学生接触互动。名额有限。请从速报名。','昌平区');");
E_D("replace into `phome_ecms_info` values('22','23','0','0','0','0','','22','0','游客*','0','0','0','0','0','1','0','1355124469','1355124469','1','0','0','','/dgcss//info/tcsh/bdxw/22.html','1','1','1','','喜欢打球的赶紧进来啊，这里都是低价位的','1355124469','','低价位的篮球鞋，赶紧挑选啊！！！，喜欢打球的赶紧进来啊，这里都是低价位的，适合咱们学生，我选择我喜欢','通州区');");
E_D("replace into `phome_ecms_info` values('23','23','0','0','0','0','','23','0','游客*','0','0','0','0','0','1','0','1355124470','1355124470','1','0','0','','/dgcss//info/tcsh/bdxw/23.html','1','1','1','','收购北京各大商场购物卡','1355124470','','本人长期收购各大商场购物卡:如有诚意转让和我联系','其它');");
E_D("replace into `phome_ecms_info` values('24','23','0','0','0','0','','24','0','游客*','0','0','0','0','0','1','0','1355124471','1355124471','1','0','0','','/dgcss//info/tcsh/bdxw/24.html','1','1','1','','口子窖)团购优惠多多','1355124471','','值五一来临之际!回馈广大客户团购最低价!有意者联系~送货上门!货真价实!','宣武区');");
E_D("replace into `phome_ecms_info` values('25','25','0','0','0','0','','25','0','游客*','0','0','0','0','0','1','0','1355124472','1355124472','1','0','0','','/dgcss//info/tcsh/lyhd/25.html','1','1','1','','提供北京地区各类安全保卫服务','1355124472','','本公司承接各类：水暖电安装、维修、改造工程服务，价格合理，同时寻求长期合作单位','海淀区');");
E_D("replace into `phome_ecms_info` values('26','25','0','0','0','0','','26','0','游客*','0','0','0','0','0','1','0','1355124473','1355124473','1','0','0','','/dgcss//info/tcsh/lyhd/26.html','1','1','1','','著名画家寻求合作','1355124473','','著名画家张宝成根据文字记载经过6年时间绘画完成圆明园全景图,现欲寻求海内外感兴趣的人士合作办画展.可全世界巡展.今年是圆明园建园三百周年.圆明园全景图也可拍卖.共计49幅.','宣武区');");
E_D("replace into `phome_ecms_info` values('27','25','0','0','0','0','','27','0','游客*','0','0','0','0','0','1','0','1355124474','1355124474','1','0','0','','/dgcss//info/tcsh/lyhd/27.html','1','1','1','','著名画家寻求合作','1355124474','','著名画家张宝成根据文字记载经过6年时间绘画完成圆明园全景图,现欲寻求海内外感兴趣的人士合作办画展.可全世界巡展.今年是圆明园建园三百周年.圆明园全景图也可拍卖.共计49幅','宣武区');");
E_D("replace into `phome_ecms_info` values('28','25','0','0','0','0','','28','0','游客*','0','0','0','0','0','1','0','1355124475','1355124475','1','0','0','','/dgcss//info/tcsh/lyhd/28.html','1','1','1','','提供优质服务节假日包车','1355124475','','本人有车中华可以提供优质服务价格合理200圆一天不包油提前打电话','丰台区');");
E_D("replace into `phome_ecms_info` values('29','25','0','0','0','0','','29','0','游客*','0','0','0','0','0','1','0','1355124476','1355124476','1','0','0','','/dgcss//info/tcsh/lyhd/29.html','1','1','1','','免费打羽毛球了','1355124476','','免费打羽毛球了上这里报名','丰台区');");
E_D("replace into `phome_ecms_info` values('30','26','0','0','0','0','','30','0','游客*','0','0','0','0','0','1','0','1355124477','1355124477','1','0','0','','/dgcss//info/tcsh/bmgs/30.html','1','1','1','','帝国网站管理系统4.6测试版发布了','1355124477','','帝国网站管理系统4.6测试版将于4月6号发布','海淀区');");
E_D("replace into `phome_ecms_info` values('31','28','0','0','0','0','','31','0','游客*','0','0','0','0','0','1','0','1355124478','1355124478','1','0','0','','/dgcss//info/qzzp/gcjs/31.html','1','1','1','','招骋职位：网页设计人员','1355124478','','职位要求 ：\r\n1、精通Dreamweaver、Flash、Fireworks或Photoshop等设计软件，可以独立完成工作； \r\n2、熟悉Html/CSS等知识；\r\n3、对色彩有良好的控制能力，良好的设计创新能力；\r\n4、高度的工作热情、较强的责任心和进取心；具备良好的沟通能力、学习吸收能力及团队合作精神；\r\n5、熟悉PHP/帝国网站管理系统模版制作者优先。 ','朝阳区');");
E_D("replace into `phome_ecms_info` values('32','28','0','0','0','0','','32','0','游客*','0','0','0','0','0','1','0','1355124479','1355124479','1','0','0','','/dgcss//info/qzzp/gcjs/32.html','1','1','1','','招聘网页设计、开发、行政人员','1355124479','','职位：网页设计职责：负责战略网的网页设计、网页制作工作要求：1、熟悉FIREWORKS、PHOTOSHOP等网页设计工具2、熟悉DREAMWEAVER、手写HTML代码等进行网页制作3、工作地点:北京（薪酬面议） 职位：程序工程师职责：负责网站程序的开发工作要求：1、熟悉asp、php等语言进行网站程序开发2、熟悉sql2000、mysql等网站数据库3、工作地点:北京（薪酬面议）','通州区');");
E_D("replace into `phome_ecms_info` values('33','28','0','0','0','0','','33','0','游客*','0','0','0','0','0','1','0','1355124480','1355124480','1','0','0','','/dgcss//info/qzzp/gcjs/33.html','1','1','1','','推荐软件开发人员(就业或实习均可)','1355124480','','推荐软件开发人员(就业或实习均可)熟练应用：Java，.NET，C++，Html，XML 等编程语言 常用开发工具：Eclipse，NetBeans，JBuilder，Microsoft Visual Studio .Net，Dreamweaver，Rational XDE 熟练配置：JBoss，TomCat，WebLogic，IIS服务器环境 熟练使用：MySQL，SQL-Server，和Oracle等数据库 能够熟练使用：JSP，Servlet，EJB，Struts架构，JSF架构等技术进行J2EE项目开发 熟悉Windows，Linux操作系统 ','大兴区');");
E_D("replace into `phome_ecms_info` values('34','28','0','0','0','0','','34','0','游客*','0','0','0','0','0','1','0','1355124481','1355124481','1','0','0','','/dgcss//info/qzzp/gcjs/34.html','1','1','1','','网络程序开发工程师','1355124481','','本公司从事网络通讯与安全方面的软件产品研发和推广。','通州区');");
E_D("replace into `phome_ecms_info` values('35','29','0','1','0','0','','35','0','游客*','0','0','0','0','0','1','0','1355124482','1355124482','1','0','0','','/dgcss//info/qzzp/cwkj/35.html','1','1','1','','房地产开发公司项目招聘出纳一名','1355124482','','大型地产开发公司招聘出纳一名要求:本科学历(全日制)女有工作经验优先,应届本科生亦可北京户口(必须)联系方式徐女士 ','昌平区');");
E_D("replace into `phome_ecms_info` values('36','29','0','0','0','0','','36','0','游客*','0','0','0','0','0','1','0','1355124483','1355124483','1','0','0','','/dgcss//info/qzzp/cwkj/36.html','1','1','1','','招聘出纳/全职会计','1355124483','','诚聘出纳一名,女,有会计证有工作经验,诚聘全职会计一名,性别不限,大专学历,有会计证书,能独立完成建帐记帐,申报,出报表等工作,诚聘库管一名.性别不限,懂出入库流程,思路清晰,有责任心.以上人员户籍不限,待遇面议,外地人公司提供住宿.家住海淀区永丰乡附近者优先.联系人:崔女士 ','昌平区');");
E_D("replace into `phome_ecms_info` values('37','29','0','0','0','0','','37','0','游客*','0','0','0','0','0','1','0','1355124484','1355124484','1','0','0','','/dgcss//info/qzzp/cwkj/37.html','1','1','1','','应聘会计','1355124484','','本人多年会计工作经验,证件齐全,如有需要招会计的单位请联系我','通州区');");
E_D("replace into `phome_ecms_info` values('38','31','0','0','0','0','','38','0','游客*','0','0','0','0','0','1','0','1355124485','1355124485','1','0','0','','/dgcss//info/qzzp/jygl/38.html','1','1','1','','本人多年会计工作经验,证件齐全,如有需要招会计的单位请联系我','1355124485','','招聘管理人员。。。。。。。。。','大兴区');");
E_D("replace into `phome_ecms_info` values('39','31','0','0','0','0','','39','0','游客*','0','0','0','0','0','1','0','1355124486','1355124486','1','0','0','','/dgcss//info/qzzp/jygl/39.html','1','1','1','','太平洋寿险招聘售后服务团队主管','1355124486','','太平洋寿险招聘售后服务团队主管','昌平区');");
E_D("replace into `phome_ecms_info` values('40','31','0','7','0','0','','40','0','游客*','0','0','0','0','0','1','0','1355124487','1355124487','1','0','0','','/dgcss//info/qzzp/jygl/40.html','1','1','1','','公司高薪聘请销售经理','1355124487','','公司归属IT行业、以销售硒鼓、耗材、办公用品、办公设备、电子产品为主。因发展需求高薪聘请销售经理、男女不限、从事过此行业者优先、实习三个月录取后待遇优厚、公司负责上保险、工作餐、双休日。','丰台区');");
E_D("replace into `phome_ecms_info` values('41','12','0','14','0','0','','41','1','admin','0','0','0','0','0','0','0','1355124488','1355124488','1','0','0','','/dgcss//info/fwxx/fwcz/41.html','1','1','1','','距积水潭地铁步行5分钟','1355124488','','租金:850元 房型: 四居 \r\n房子位置非常好，步行五分钟到积水潭地铁，交通便利，家电齐全。注：房子是转租的，由于我们买房了，现在把房子转租出去,有意者请与我联系！','宣武区');");

@include("../../inc/footer.php");
?>