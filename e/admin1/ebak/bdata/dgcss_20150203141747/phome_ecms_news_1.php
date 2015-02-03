<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news`;");
E_C("CREATE TABLE `phome_ecms_news` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `classid` smallint(5) unsigned NOT NULL default '0',
  `ttid` smallint(5) unsigned NOT NULL default '0',
  `onclick` int(10) unsigned NOT NULL default '0',
  `plnum` mediumint(8) unsigned NOT NULL default '0',
  `totaldown` mediumint(8) unsigned NOT NULL default '0',
  `newspath` char(20) NOT NULL default '',
  `filename` char(36) NOT NULL default '',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL default '',
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
  `titlefont` char(14) NOT NULL default '',
  `titleurl` char(200) NOT NULL default '',
  `stb` tinyint(3) unsigned NOT NULL default '1',
  `fstb` tinyint(3) unsigned NOT NULL default '1',
  `restb` tinyint(3) unsigned NOT NULL default '1',
  `keyboard` char(80) NOT NULL default '',
  `title` char(100) NOT NULL default '',
  `newstime` int(10) unsigned NOT NULL default '0',
  `titlepic` char(120) NOT NULL default '',
  `ftitle` char(120) NOT NULL default '',
  `smalltext` char(255) NOT NULL default '',
  `diggtop` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news` values('1','35','0','0','0','0','2012-12-10','1','1','admin','0','0','0','0','0','0','0','1355124441','1355124441','1','0','0','','/dgcss//news/world/2012-12-10/1.html','1','1','1','','奥地利“兽父”是怎么养成的？','1355124441','','','现年73岁的奥地利男子约瑟夫·弗莱茨勒把亲生女儿囚禁在地牢里达24年，持续性虐待女儿并与其生下7名子女。这起丑闻震惊了世界。','0');");
E_D("replace into `phome_ecms_news` values('2','35','0','0','0','0','2012-12-10','2','1','admin','0','0','0','0','0','0','0','1355124442','1355124442','1','0','0','','/dgcss//news/world/2012-12-10/2.html','1','1','1','','韩国总统李明博想请比尔·盖茨当顾问','1355124442','','','韩国总统李明博决定聘请10位重量级外国人士担任国际顾问，包括微软创办人比尔·盖茨及一位外国元首。李明博下令修改韩国《国家公务员法》，延聘外国人担任公务员、副部长甚至部长。','0');");
E_D("replace into `phome_ecms_news` values('3','35','0','0','0','0','2012-12-10','3','1','admin','0','0','0','0','0','0','0','1355124443','1355124443','1','0','0','','/dgcss//news/world/2012-12-10/3.html','1','1','1','','奥巴马北卡初选大赢 希拉里印第安纳险胜','1355124443','','','美国总统竞选人奥巴马和希拉里在北卡罗来纳州和印第安纳州预选各赢一场，其中奥巴马以56%的得票率领先希拉里14个百分点；印第安纳州，希拉里以51%险胜，而奥巴马仅2个百分点落后。','0');");
E_D("replace into `phome_ecms_news` values('4','35','0','0','0','0','2012-12-10','4','1','admin','0','0','0','0','0','0','0','1355124444','1355124444','1','0','0','','/dgcss//news/world/2012-12-10/4.html','1','1','1','','普京获俄总理提名 俄国家杜马今日将审议','1355124444','','','普京在克里姆林宫与俄国家杜马议会党团领导人就他出任总理问题进行了磋商。据俄塔社报道，普京表示，一旦国家杜马批准他为政府总理，他将考虑议员们提出的各种意见。','0');");
E_D("replace into `phome_ecms_news` values('5','35','0','0','0','0','2012-12-10','5','1','admin','0','0','0','0','0','0','0','1355124445','1355124445','1','0','0','','/dgcss//news/world/2012-12-10/5.html','1','1','1','','法国客机飞行员炫耀高空特技险致两机相撞','1355124445','','','法国航空公司一名飞行员驾机途中让一男孩到驾驶舱参观,还为他“表演”高空特技，飞机在空中跳“摇摆舞”，险些造成两机相撞。法国航空安全部门已就此事展开调查。','0');");
E_D("replace into `phome_ecms_news` values('6','35','0','0','0','0','2012-12-10','6','1','admin','0','0','0','0','0','0','0','1355124446','1355124446','1','0','0','','/dgcss//news/world/2012-12-10/6.html','1','1','1','','斑鳖全球仅三只 两只苏州完婚(视频)','1355124446','','','濒危动物斑鳖在全球只发现3只。长沙一只斑鳖抵达苏州动物园，与苏州斑鳖配对。据介绍，虽然这三只斑鳖都已老年，但饲养好能活三百年。若斑鳖能配对成功，将是保护斑鳖的最后希望。','0');");
E_D("replace into `phome_ecms_news` values('7','35','0','0','0','0','2012-12-10','7','1','admin','0','0','0','0','0','0','0','1355124447','1355124447','1','0','0','','/dgcss//news/world/2012-12-10/7.html','1','1','1','','日本本州东海岸发生7.1级地震 连发6级以上地震','1355124447','','','日本东部海域当地时间8日凌晨1时02分发生里氏6.3级地震，1时45分又发生6.7级地震。北海道沿岸和本州东部地区都有震感，其中栃木县震感最强，东京也有明显震感，晃动持续了近20秒。','0');");
E_D("replace into `phome_ecms_news` values('8','35','0','0','0','0','2012-12-10','8','1','admin','0','0','0','0','0','0','0','1355124448','1355124448','1','0','0','','/dgcss//news/world/2012-12-10/8.html','1','1','1','','七国人道援助物资已运抵缅甸','1355124448','','','包括中国在内的部分国家人道主义援助物资7日紧急运抵缅甸仰光市，缅甸政府迅速将有关物资运往灾区发放给灾民。缅甸国家电台当天晚间广播说，已经有7个国家将救灾物资运送到','0');");
E_D("replace into `phome_ecms_news` values('9','35','0','0','0','0','2012-12-10','9','1','admin','0','0','0','0','0','0','0','1355124449','1355124449','1','0','0','','/dgcss//news/world/2012-12-10/9.html','1','1','1','','联合国粮农组织担心强风暴影响缅甸稻米出口','1355124449','','','联合国粮食7日表示，强热带风暴“纳尔吉斯”给缅甸主要稻米产区造成重大损失，可能影响缅甸今年的稻米出口。粮农组织预计，缅甸受灾最严重5个省邦的稻米产量占全国总产量的65%','0');");
E_D("replace into `phome_ecms_news` values('10','35','0','0','0','0','2012-12-10','10','1','admin','0','0','0','0','0','0','0','1355124450','1355124450','1','0','0','','/dgcss//news/world/2012-12-10/10.html','1','1','1','','加拿大一公寓楼发生火灾3人丧生数十人受伤','1355124450','','','加拿大不列颠哥伦比亚省北温哥华市警方7日说，该市一栋3层公寓楼6日晚发生火灾，造成3人丧生，数十人受伤。警方怀疑这是一起纵火案。','0');");
E_D("replace into `phome_ecms_news` values('11','35','0','1','0','0','2012-12-10','11','1','admin','0','0','0','0','0','0','0','1355124451','1355124451','1','0','0','','/dgcss//news/world/2012-12-10/11.html','1','1','1','','两名日本女游客在也门被部落武装人员绑架','1355124451','','','日本驻也门大使馆7日证实，两名日本女游客当天在也门中部城镇马里卜被绑架。另据报道，路边检查站的警察试图阻止绑匪逃走时受到绑匪攻击，导致一名警察受伤。','0');");
E_D("replace into `phome_ecms_news` values('12','35','0','0','0','0','2012-12-10','12','1','admin','0','0','0','0','0','0','0','1355124452','1355124452','1','0','0','','/dgcss//news/world/2012-12-10/12.html','1','1','1','','爱尔兰议会投票推举布赖恩-考恩为新政府总理','1355124452','','','　　新华网快讯：爱尔兰议会7日投票推举副总理兼财政部长布赖恩·考恩为新一任政府总理。　　(本文来源：新华网  )','0');");
E_D("replace into `phome_ecms_news` values('13','35','0','0','0','0','2012-12-10','13','1','admin','0','0','0','0','0','0','0','1355124453','1355124453','1','0','0','','/dgcss//news/world/2012-12-10/13.html','1','1','1','','马来红新月会宣布将向缅甸派出救灾小组','1355124453','','','马来西亚红新月会7日在吉隆坡宣布，将派出一个10人救灾小组前往缅甸，帮助开展救灾工作。','0');");
E_D("replace into `phome_ecms_news` values('14','35','0','0','0','0','2012-12-10','14','1','admin','0','0','0','0','0','0','0','1355124454','1355124454','1','0','0','','/dgcss//news/world/2012-12-10/14.html','1','1','1','','印度成功试射一枚“烈火－3”型导弹','1355124454','','','印度于当地时间7日成功试射了一枚“烈火-3”型导弹。这种让印度人引以为豪的中程弹道导弹的射程可达3500公里，覆盖中国内陆。','0');");
E_D("replace into `phome_ecms_news` values('15','35','0','0','0','0','2012-12-10','15','1','admin','0','0','0','0','0','0','0','1355124455','1355124455','1','0','0','','/dgcss//news/world/2012-12-10/15.html','1','1','1','','中国紧急援助物资运抵缅甸仰光(组图)','1355124455','','','中国政府向缅甸政府提供的人道主义紧急援助物资7日下午空运抵达仰光国际机场。','0');");
E_D("replace into `phome_ecms_news` values('61','34','0','0','0','0','2012-12-10','61','1','admin','0','0','0','0','0','0','0','1355124501','1355124501','1','0','0','','/dgcss//news/china/2012-12-10/61.html','1','1','1','','台\\\\\"金援外交\\\\\"丑闻涉案人遭到恐吓 警方加强保护','1355124501','','','涉入侵吞台当局“金援外交”丑闻的中间人吴思材惊爆遭两名歹徒恐吓要求离开台湾。台湾刑事部门3日晚间已针对全案展开调查，并24小时采取贴身保护的方式，确保吴思材的人身安全。','0');");
E_D("replace into `phome_ecms_news` values('62','34','0','1','0','0','2012-12-10','62','1','admin','0','1','0','0','0','0','0','1355124502','1355124502','1','0','0','','/dgcss//news/china/2012-12-10/62.html','1','1','1','','武汉一日两遭暴雨袭击 闪电2000次2人死亡(图)','1355124502','','','昨晚武昌上空电闪雷鸣。武汉共闪电2200次。本报摄昨日凌晨1点，一场强雷暴“意外”袭击江城。来源：武汉晚报熊波摄昨晚9时，我市突降大暴雨，铁路立交桥下路人打着伞在雨中急行。','0');");
E_D("replace into `phome_ecms_news` values('63','34','0','0','0','0','2012-12-10','63','1','admin','0','0','0','0','0','0','0','1355124503','1355124503','1','0','0','','/dgcss//news/china/2012-12-10/63.html','1','1','1','','EV71病毒袭粤港澳 香港发病率高于过去3年','1355124503','','','据香港文汇报报道，近日，包括安徽、广东、湖北、陕西、浙江等省份相继爆出手足口病疫情，引起中央高度关注。其中安徽阜阳已有22人死亡，而邻近香港的广东佛山也有2名病例死亡。','0');");
E_D("replace into `phome_ecms_news` values('64','34','0','0','0','0','2012-12-10','64','1','admin','0','0','0','0','0','0','0','1355124504','1355124504','1','0','0','','/dgcss//news/china/2012-12-10/64.html','1','1','1','','民进党今开临时党代会检讨败选 陈水扁选择缺席','1355124504','','','民进党今天下午召开临时党代表大会，对败选后党内检讨总结，台当局“副总统”吕秀莲、党主席谢长廷、“行政院长”张俊雄及两位前党主席苏贞昌及游锡堃等将出席，唯独陈水扁缺席。','0');");
E_D("replace into `phome_ecms_news` values('65','34','0','0','0','0','2012-12-10','65','1','admin','0','0','0','0','0','0','0','1355124505','1355124505','1','0','0','','/dgcss//news/china/2012-12-10/65.html','1','1','1','','柏杨葬礼将于14日举行 骨灰抛撒绿岛海面','1355124505','','','在台北济南教会的教堂里为柏杨举行“安息礼拜”活动，教堂有300个座位，不发请柬，但台湾甚至海外各界名流会到场共同纪念这位文化大师。纪念结束后，柏杨的遗体将送去火化。','0');");
E_D("replace into `phome_ecms_news` values('66','34','0','0','0','0','2012-12-10','66','1','admin','0','0','0','0','0','0','0','1355124506','1355124506','1','0','0','','/dgcss//news/china/2012-12-10/66.html','1','1','1','','广东省物价局：粮价节后上涨不可信','1355124506','','','广东省物价局就近期粮价以及所谓节后粮价要涨的消息作出回应。省物价局监测报告以及五一期间市场检查，目前大米批零市场供应正常，仅个别国产优质米零售价格涨幅较大，进口泰国米','0');");
E_D("replace into `phome_ecms_news` values('67','34','0','1','0','0','2012-12-10','67','1','admin','0','0','0','0','0','0','0','1355124507','1355124507','1','0','0','','/dgcss//news/china/2012-12-10/67.html','1','1','1','','杭州湾跨海大桥日均车流量逾10万(组图)','1355124507','','','大桥开通头两天日均约有逾10万多车次通行。在通行首日时，很大一部分车辆是为“尝鲜”而来，不仅车流量很大，且这些车辆常会在桥上停车观光，成为大桥拥堵的重要原因。','0');");
E_D("replace into `phome_ecms_news` values('68','34','0','1','0','0','2012-12-10','68','1','admin','0','0','0','0','0','0','0','1355124508','1355124508','1','0','0','','/dgcss//news/china/2012-12-10/68.html','1','1','1','','驻日大使崔天凯:胡锦涛主席访日有三点值得关注','1355124508','','','中国驻日本大使崔天凯在人民日报撰文指出：胡锦涛主席访日有三点尤其值得关注。中国国家主席胡锦涛将对日本进行国事访问。这是中国国家元首时隔十年再次访日，也是新世纪首次访日','0');");
E_D("replace into `phome_ecms_news` values('69','34','0','23','0','0','2012-12-10','69','1','admin','0','0','0','0','0','0','0','1355124509','1355124509','1','0','0','','/dgcss//news/china/2012-12-10/69.html','1','1','1','','广东丹霞山发现巨型\\\\\"青铜剑\\\\\"(组图)','1355124509','','','“青铜剑”“镶嵌”在晒布岩岩壁上。“青铜剑”疑似绿色植物攀附在岩壁上生长。记者陪同远道而来的朋友游览世界地质公园广东丹霞山，在阳元石景区内，突然发现一把青铜剑','0');");
E_D("replace into `phome_ecms_news` values('70','35','0','2','0','0','2012-12-10','70','1','admin','1','1','1','0','0','0','0','1355124510','1355124510','1','0','0','','/dgcss//news/world/2012-12-10/70.html','1','1','1','','俄罗斯第三任总统梅德韦杰夫宣誓就职','1355124510','http://cimg21.163.com/cnews/2008/5/7/20080507165459698f2.jpg','','在3月2日俄罗斯总统选举中胜出的当选总统德米特里-梅德韦杰夫, 于当地时间7日12时过后(北京时间下午4时)在克里姆林宫正式宣誓就职，成为俄罗斯第三位总统。','0');");
E_D("replace into `phome_ecms_news` values('71','37','0','1','0','0','2012-12-10','71','1','admin','1','0','1','0','0','0','0','1355124511','1355124511','1','0','0','','/dgcss//news/sports/2012-12-10/71.html','1','1','1','','奥运圣火成功登顶珠峰','1355124511','http://cimg20.163.com/cnews/2008/5/8/2008050809305433312.jpg','','奥运火炬、接力珠峰传递活动圆满结束，携带圣火的突击队员全部登顶，并进行了圣火的传递。圣火在珠峰之巅传递，首次成功点亮世界最高峰，创造了奥运圣火登上世界第三极的新纪录。','0');");
E_D("replace into `phome_ecms_news` values('72','35','0','11','0','0','2012-12-10','72','1','admin','1','0','1','0','0','0','0','1355124512','1355124512','1','0','0','','/dgcss//news/world/2012-12-10/72.html','1','1','1','','中国紧急援助物资运抵缅甸仰光(组图)','1355124512','http://cimg21.163.com/cnews/2008/5/8/200805080616347228c.jpg','','中国政府向缅甸提供的人道主义紧急援助物资当日空运抵达仰光国际机场。这批物资主要包括帐篷、毛巾被和压缩饼干等，价值50万美元。中国政府还向缅甸提供了50万美元的现汇援助。','0');");
E_D("replace into `phome_ecms_news` values('73','36','0','0','0','0','2012-12-10','73','1','admin','0','1','1','0','0','0','0','1355124513','1355124513','1','0','0','','/dgcss//news/ent/2012-12-10/73.html','1','1','1','','张曼玉广告写真花絮曝光 流露优雅从容','1355124513','http://cimg21.163.com/ent/2008/5/8/2008050811191076090.jpg','','张曼玉最近一组广告写真花絮曝光，照片中的张曼玉风采依旧，透露优雅气质。','0');");
E_D("replace into `phome_ecms_news` values('74','36','0','0','0','0','2012-12-10','74','1','admin','0','1','1','0','0','0','0','1355124514','1355124514','1','0','0','','/dgcss//news/ent/2012-12-10/74.html','1','1','1','张艺谋','传张艺谋因执导奥运身价涨5倍','1355124514','http://cimg21.163.com/ent/2008/5/8/200805080924559c424.jpg','','2008北京奥运会的开幕式已开始了彩排，作为总导演的张艺谋坦言，执导奥运会的压力远大过执导电影。而由于导演了奥运会这样的人类盛典，张艺谋导演身价上涨了5倍以上。','0');");
E_D("replace into `phome_ecms_news` values('75','36','0','0','0','0','2012-12-10','75','1','admin','0','1','1','0','0','0','0','1355124515','1355124515','1','0','0','','/dgcss//news/ent/2012-12-10/75.html','1','1','1','尹馨','尹馨大胆亮相《男人装》 嫩肤美腿勾人魂','1355124515','http://img1.qq.com/ent/pics/10290/10290789.jpg','','蔡明亮徒弟之作《帮帮我爱神》女主角尹馨的大胆出演，足以挑战《色戒》中汤唯的情色。尹馨在5月份的《男人装》中有出色亮相。','0');");
E_D("replace into `phome_ecms_news` values('76','36','0','0','0','0','2012-12-10','76','1','admin','0','1','1','0','0','0','0','1355124516','1355124516','1','0','0','','/dgcss//news/ent/2012-12-10/76.html','1','1','1','','“最美清洁工”原是《赤壁》宫女','1355124516','http://img1.qq.com/ent/pics/10290/10290791.jpg','','2008北京车展4月23日刚刚落幕，“最美清洁工”迅速走红网络。这位躲在车展角落毫不起眼的清洁工美女，在有心人士的偷拍下，照片一经放到网上就引来网友热捧。','0');");
E_D("replace into `phome_ecms_news` values('77','37','0','0','0','0','2012-12-10','77','1','admin','0','1','1','0','0','0','0','1355124517','1355124517','1','0','0','','/dgcss//news/sports/2012-12-10/77.html','1','1','1','科比','科比专为大场面而生','1355124517','http://img1.qq.com/sports/pics/10300/10300435.jpg','','成名这么久远了，科比终于被证实“最有价值”。','0');");
E_D("replace into `phome_ecms_news` values('78','37','0','28','0','0','2012-12-10','78','1','admin','0','1','1','0','0','0','0','1355124518','1355124518','1','0','0','','/dgcss//news/sports/2012-12-10/78.html','1','1','1','','中国男乒第16次捧起斯韦思林杯','1355124518','http://img1.qq.com/sports/pics/8865/8865651.jpg','','第49届世乒赛男团决赛的争夺，中国队最终凭借马琳、王皓和王励勤三员虎将的出色发挥以3比0干净利落的击败韩国队，延续了世乒赛上逢韩必胜的历史，历史上第16次捧起斯韦思林杯！','0');");

@include("../../inc/footer.php");
?>