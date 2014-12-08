<div class="container">
<?php
$question = Questions::model()->findAll(array('select'=>'*','condition'=>'id="1" AND category="sdlc-pln"'));
foreach ($question as $key => $value) {
    $question=$value->question;
    $no=$value->no;
}
?>
<div class="page-header">
        <div class="clearfix">
            <div class="col-md-12">
                <h1>Question 01. <small><?php echo $question;?></small></h1>
            </div>
        </div>
    </div>

    
    
    <div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="well details">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2 style="text-decoration:underline;">Hints</h2>
                        <p>They must have<strong> Problem </strong> Solving skills. </p>
                        <p><strong>Observation</strong> is good method for that phase </p>
                        <p>They have to use various type of <strong> IDE </strong> to boost developing speed. </p>
                        <p class="text-center skills"><strong>Answers</strong></p>
                        <div class="skillLine"><div class="skill pull-left"><input type="checkbox" name="number[]"></div><div class="rating" id="rate1">&nbsp;<strong>Design</strong></div></div>
                        <div class="skillLine"><div class="skill pull-left"><input type="checkbox" name="number[]"></div><div class="rating" id="rate2">&nbsp;<strong>Coding</strong></div></div>
                        <div class="skillLine"><div class="skill pull-left"><input type="checkbox" name="number[]"></div><div class="rating" id="rate3">&nbsp;<strong>Analysis</strong></div></div>
                        <div class="skillLine"><div class="skill pull-left"><input type="checkbox" name="number[]"></div><div class="rating" id="rate4">&nbsp;<strong>Testing</strong></div></div>
                        <div class="skillLine"><div class="skill pull-left"><input type="checkbox" name="number[]"></div><div class="rating" id="rate5">&nbsp;<strong>Planning</strong></div></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-1 text-center">                        
                        <figure>
                            <div id="qrcode"></div>                                                                                        
                            <span class="avg"><?php echo $no;?></span>           
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right" style="font-size:24px;">
            <a href="/bootstrap-template/rating-list" title="User List Barcodes - Bootstrap template, demonstrating a list of peopls.">Prev</a> | <a href="/bootstrap-template/blog-list-QR" title="Blog List QR - Bootstrap template, demonstrating a list of blogs.">Next</a>
        </div>
                </div>                
            </div>
        </div>
    </div>
</div>
<style>
body {
    font-family: "Segoe UI", 'sans-serif';
}

.avg {
    font-size:77px; 
    padding-top: 20px;
    color:#5CB85C;
}

.details {
    min-height: 355px;
    display: inline-block;
}

.rating {
    padding-left:40px;
}

.skillLine {    
    display:inline-block;
    width:100%;
    padding: 3px 4px;    
}

.skills {
    text-decoration:underline;
}

div.skill {
    background: #F58723;
    border-radius: 3px;
    color: white;
    font-weight: bold;
    padding: 3px 4px;    
    width:70px;
}
</style>
    
    <script type="text/javascript">
jQuery(function ($) {
    $('#rate1').shieldRating({
        max: 7,
        step: 0.1,
        value: 6.3,
        markPreset: false
    });
    $('#rate2').shieldRating({
        max: 7,
        step: 0.1,
        value: 6,
        markPreset: false
    });
    $('#rate3').shieldRating({
        max: 7,
        step: 0.1,
        value: 3,
        markPreset: false
    });
    $('#rate4').shieldRating({
        max: 7,
        step: 0.1,
        value: 5,
        markPreset: false
    });
    $('#rate5').shieldRating({
        max: 7,
        step: 0.1,
        value: 5.7,
        markPreset: false
    });
    $("#qrcode").shieldQRcode({
        mode: "byte",
        size: 170,
        value: "For more information, please visit https://yoursite.com/Andrew.Smith"
    });
});
</script>
</div>