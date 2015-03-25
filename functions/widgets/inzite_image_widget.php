<?php

// echo "test as" ;
// echo $instance['link'];

echo $before_widget;

	echo $this->get_image_html( $instance, true );

	if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }

	if ( !empty( $description ) ) {
		//echo '<div class="'.$this->widget_options['classname'].'-description" >';
		echo wpautop( $description );
		//echo "</div>";
	}

	if ( !empty( $instance['link'] )) {
		echo "<p><a class='btn btn-default btn-brand' href='".$instance['link']."'>";
		echo "Læs mere";
		echo "</a></p>";
	}

echo $after_widget;

?>
