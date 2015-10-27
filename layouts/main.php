<?php
use yii\helpers\Url;
use yii\helpers\Html;
use tksoftcn\dwz\DwzAsset;
use tksoftcn\dwz\widgets\Menu;

$bundle = DwzAsset::register($this);
$publishedUrl = Yii::$app->getAssetManager()->getPublishedUrl($bundle->sourcePath);
$this->beginPage();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=Html::encode(Yii::$app->name); ?></title>
<link rel="icon" type="image/png" href="<?=$publishedUrl?>/img/favicon.png" />
<? $this->head() ?>
<script type="text/javascript">
$(function(){
	DWZ.init("<?=$publishedUrl?>/dwz.frag.xml", {
		loginUrl:"<?=Url::toRoute(Yii::$app->user->loginUrl); ?>", loginTitle:"登录",	// 弹出登录对话框
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		keys: {statusCode:"statusCode", message:"message"}, //【可选】
		ui:{hideMode:'offsets'}, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"<?=$publishedUrl?>/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});

</script>
</head>

<body scroll="no">
<? $this->beginBody() ?>
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="/" <? if (!empty(Yii::$app->params['logoUrl'])):?> style="background:url(<?=Yii::$app->params['logoUrl'] ?>) no-repeat;" <?endif; ?>>Logo</a>
				<ul class="nav">
				    <li><a>当前用户: <?=Yii::$app->user->getIdentity()->nickname?> （<?=Yii::$app->user->getIdentity()->username?>）</a></li>
					<li><a href="<?=Url::toRoute('/user/setting') ?>" target="dialog" width="600">个人设置</a></li>
					<li><a href="<?=Url::toRoute('/user/changepwd') ?>" target="dialog" width="600">修改密码</a></li>
					<li><a href="<?=Url::toRoute('/user/logout') ?>">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<!--<li theme="red"><div>红色</div></li>-->
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>

			<!-- navMenu -->
			
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>
				<div class="accordion" fillSpace="sidebar">
				    <? foreach ($this->menus as $item): ?>
				    <div class="accordionHeader">
						<h2><span>Folder</span><?=$item['label'] ?></h2>
					</div>
					<div class="accordionContent">
					   <? if (isset($item['items'])): ?>
					   <?=Menu::widget(['items'=>$item['items']]); ?>
					   <? endif; ?>
					</div>    
				    <? endforeach; ?>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<?=$content?>
				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2015 <?=Yii::$app->name ?></div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>