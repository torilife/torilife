<p><?php echo Html::anchor('note/create', '新規作成'); ?></p>

<?php if ($list): ?>
<div id="article_list">
<?php foreach ($list as $id => $note): ?>
	<div class="article">
		<div class="header">
			<div><?php echo site_profile_image($note->member->image, 'small', 'member/'.$note->member->id); ?></div>
			<div><?php echo Html::anchor('member/'.$note->member->id, $note->member->name); ?></div>
			<h4><?php echo Html::anchor('note/detail/'.$id, $note->title); ?></h4>
			<div>(<?php echo Date::time_ago(strtotime($note->created_at)) ?>)</div>
		</div>
		<div class="body"><?php echo nl2br($note->body) ?></div>
		<div class="footer">投稿日: <?php echo date('jS F, Y', strtotime($note->created_at)) ?></div>
	</div>
<?php endforeach; ?>
</div>
<?php else: ?>
<?php echo \Config::get('site.term.note'); ?>がありません。
<?php endif; ?>
