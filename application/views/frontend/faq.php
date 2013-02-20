

<div id="faqList" >
<?foreach($content['main']['faqList'] as $faqListItem):?>
  <div class="review">
	<p class="reviewName"> <?=$faqListItem['reviewName'];?></p>

   <p class="reviewText"> <?=$faqListItem['reviewText'];?></p>


  </div>
<?endforeach;?>
</div>

