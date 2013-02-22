
<div class="leftColumn">
<div class="faqList" >
<?foreach($content['main']['faqList'] as $faqListItem):?>
  <div class="review">

	<p class="bookTitle"> <?=$faqListItem['reviewName'];?></p>

   <p class="synopsis"> <?=$faqListItem['reviewText'];?></p>


  </div>
<?endforeach;?>
</div>
</div>

