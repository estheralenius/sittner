<?php $items = get_field('list') ?>
<div class="mobilbakgrund" id="workbakgrund"></div>    
<div class="undersida">    
<div class="inforad">
    <div class="sidostolar">
        <!--<img src="images/stolar.jpg" class="stolar">-->
    </div>
    <div class="infoblock">
        <h2><?php echo $post->post_title ?></h2>
        <div class="kundrad">
            <?php if($items): 
                foreach($items as $item):?>
                <div class="caseruta">
                    <div class="casebubbla brollop" style="background-image: url(<?php echo $item['image']?>)"></div>
                    <h4><?php echo $item['title']?></h4>
                    <p><?php echo $item['text']?></p>
                </div>
            <?php endforeach;
            endif; ?>
            <!--<div class="caseruta">
                <div class="casebubbla convenium"></div>
                <h4>Convenium</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> 
        <div class="kundrad">
            <div class="caseruta">
                <div class="casebubbla frideborg"></div>
                <h4>Frideborg på Österlen</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
            <div class="caseruta">
                <div class="casebubbla karlaby"></div>
                <h4>Karlaby Kro</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> 
        <div class="kundrad">
            <div class="caseruta hideme">
                <div class="casebubbla martenpers"></div>
                <h4>MårtenPers Källa</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
            <div class="caseruta hideme">
                <div class="casebubbla maklargarden"></div>
                <h4>Mäklargården</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> 
        <div class="kundrad">
            <div class="caseruta hideme">
                <div class="casebubbla polykemi"></div>
                <h4>Polykemi</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
            <div class="caseruta hideme">
                <div class="casebubbla qverrestad"></div>
                <h4>Qverrestad</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> 
        <div class="kundrad">
            <div class="caseruta hideme">
                <div class="casebubbla stangsel"></div>
                <h4>Stängselfabriken Transnaval</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
            <div class="caseruta hideme">
                <div class="casebubbla yo"></div>
                <h4>Y&amp;Ö Revision</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> 
        <div class="kundrad">
            <div class="caseruta hideme">
                <div class="casebubbla okrab"></div>
                <h4>Ökrab</h4>
                <p>branding | bildarkiv | nyhetsbrev | uppdaterat hemsida | utskick till kunder | 3 kampanjer</p>
            </div>
        </div> -->
    </div>    
</div>    
</div>    