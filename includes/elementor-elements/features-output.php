<!--******* Features Widget Section *******-->
<section id="overview" class="landing-development-process">
	<div class="container">
		<span>
			<div data-reactroot="" class="process-timeline">
				<div class="pt-timeline">
					<div class="pt-timeline-backside-bar">
						<div class="pt-timeline-frontside-bar" style="width: 67%;"></div>
					</div>
				</div>
				<div class="pt-action-bar">
					<?php $tab_count = 1; ?>
				    <?php foreach( $settings['tabs'] as $tab ): ?>
				        <?php $btn_class = ( $tab_count == 1 ) ? ' pt-action-bar-button--active' : ''; ?>
    					<button class="pt-action-bar-button<?php echo esc_attr($btn_class); ?>">
    						<div class="pt-action-bar-button-background-number">0<?php echo esc_attr( $tab_count ); ?></div>
    						<div class="pt-action-bar-button-icon">
    							<div class="pt-action-bar-button-icon-inner-ring-1"></div>
    							<div class="pt-action-bar-button-icon-inner-ring-2"></div>
    							<div class="pt-action-bar-button-icon-inner-ring-3"></div>
    							<div class="pt-action-bar-button-icon-inner-ring-4"></div>
    							<div class="pt-action-bar-button-icon-inner-ring-5"></div>
    							<div class="pt-action-bar-button-icon-inner-ring-6"></div>
    						</div>
    						<div class="pt-action-bar-button-title"><?php echo esc_attr( $tab['title'] ); ?></div>
    						<div class="pt-action-bar-button-text"><?php echo wp_kses_post( $tab['content'] ); ?></div>
    					</button>
    					<?php $tab_count++; ?>
    				<?php endforeach; ?>
				</div>
			</div>
		</span>
	</div>
</section>

<!--******* Features Widget CSS *******-->
<style>
.process-timeline {
    position: relative;
}

.process-timeline .pt-timeline {
    top: 57px;
    left: 85px;
    right: 85px;
    position: absolute;
    display: none;
    height: 1px;
}

.process-timeline .pt-timeline-backside-bar {
    height: 1px;
    background-color: #ebebeb;
}
.process-timeline .pt-timeline-frontside-bar {
    width: 0;
    height: 1px;
    top: 0;
    left: 0;
    position: absolute;
    background-color: #00d563;
    transition: width .4s ease;
}

.process-timeline .pt-action-bar {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.process-timeline .pt-action-bar-button {
    position: relative;
    align-items: center;
    background: none;
    border: 0;
    display: flex;
    flex-direction: column;
    margin: 0;
    outline: none;
    padding: 0;
    width: 170px;
}
.process-timeline .pt-action-bar-button-background-number {
    top: 0;
    left: 50%;
    position: absolute;
    color: #ebebeb;
    font-weight: 800;
    font-size: 100px;
    line-height: 1em;
    transition: top .4s ease;
    opacity: .3;
    transform: translateX(-50%);
}
.process-timeline .pt-action-bar-button-icon {
    width: 114px;
    height: 114px;
    position: relative;
    margin: 0 auto;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-1 {
    width: 114px;
    height: 114px;
    top: 0;
    left: 0;
    position: absolute;
    border: 1px solid #ebebeb;
    border-radius: 100px;
    opacity: .2;
    transform: scale(0);
    transition: transform .4s ease;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-2 {
    width: 84px;
    height: 84px;
    left: 15px;
    position: absolute;
    top: 15px;
    border: 1px solid #ebebeb;
    border-radius: 100px;
    opacity: .5;
    transform: scale(0);
    transition: transform .4s ease;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-3 {
    width: 54px;
    height: 54px;
    left: 30px;
    position: absolute;
    top: 30px;
    border: 1px solid #ebebeb;
    border-radius: 100px;
    opacity: .8;
    transform: scale(0);
    transition: transform .4s ease;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-4 {
    box-shadow: 0 4px 8px 0 rgba(0,213,98,.4);
    opacity: 0;
    transition: opacity .4s ease;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-4, .process-timeline .pt-action-bar-button-icon-inner-ring-5 {
    width: 26px;
    height: 26px;
    left: 44px;
    position: absolute;
    top: 44px;
    background-color: #00d563;
    border: 6px solid #00d563;
    border-radius: 100px;
}

.process-timeline .pt-action-bar-button-icon-inner-ring-5 {
    transform: scale(.5);
    transition: transform .4s ease;
}
.process-timeline .pt-action-bar-button-icon-inner-ring-6 {
    width: 14px;
    height: 14px;
    left: 50px;
    position: absolute;
    top: 50px;
    background-color: #fff;
    border-radius: 100px;
    transform: scale(0);
    transition: transform .2s ease;
}
.process-timeline .pt-action-bar-button-title {
    top: -20px;
    position: relative;
    font-weight: 500;
    font-size: 18px;
    line-height: 24px;
    transition: color .4s ease;
}

.process-timeline .pt-action-bar-button-text {
    color: #888;
    font-size: 14px;
    line-height: 24px;
    transition: opacity .4s ease;
}
@media (min-width: 768px) {
    .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-4 {
        opacity: 1;
    }
    .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-1, .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-2, .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-3, .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-5, .process-timeline .pt-action-bar-button--active .pt-action-bar-button-icon-inner-ring-6 {
        transform: scale(1);
    }
    .process-timeline .pt-action-bar {
        position: relative;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
    }
    .process-timeline .pt-timeline {
        display: block;
    }
    .process-timeline .pt-action-bar-button-title {
        color: #ccc;
    }
    .process-timeline .pt-action-bar-button-text {
        opacity: 0;
    }
    .process-timeline .pt-action-bar-button--active .pt-action-bar-button-text {
        opacity: 1;
    }
    .process-timeline .pt-action-bar-button--active .pt-action-bar-button-background-number {
        top: -60px;
    }
}
</style>

<!--******* Features Widget JS *******-->
<script>
	jQuery(document).ready(function($){
		var btn_count = $('.pt-action-bar-button').length
		var percent = (100/(btn_count-1));
		
		$('.pt-action-bar').on('click', '.pt-action-bar-button', function(e){
			e.preventDefault();
			
			var mydiv = $('.pt-timeline-frontside-bar');
			var index = ( $(this).index() );
			mydiv.css('width', (index*percent)+'%');
			$('.pt-action-bar').find('.pt-action-bar-button').removeClass('pt-action-bar-button--active');
			$(this).addClass('pt-action-bar-button--active');
		});
	});
</script>




