<?php

/**
 * Created by Alex Regan <alex.joseph.regan@gmail.com>.
 * User: alexsasharegan
 * Github: https://github.com/alexsasharegan
 */

class OpenGraph {
	
	/**
	 * og:title - The title of your object as it should appear within the graph, e.g., "The Rock".
	 * @var string
	 */
	public $title = '';
	
	/**
	 * og:title - The title of your object as it should appear within the graph, e.g., "The Rock".
	 * @return array
	 */
	public function getTitle() {
		return [ 'og:title' => $this->title, ];
	}
	
	/**
	 * og:title - The title of your object as it should appear within the graph, e.g., "The Rock".
	 * @param string $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}
	
	/**
	 * og:type - The type of your object, e.g., "video.movie". Depending on the type you specify, other properties may also be required.
	 * @var string
	 */
	public $type = '';
	
	/**
	 * og:type - The type of your object, e.g., "video.movie". Depending on the type you specify, other properties may also be required.
	 * @return array
	 */
	public function getType() {
		return [ 'og:type' => $this->type, ];
	}
	
	/**
	 * og:type - The type of your object, e.g., "video.movie". Depending on the type you specify, other properties may also be required.
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
	}
	
	/**
	 * og:image - An image URL which should represent your object within the graph.
	 * @var string
	 */
	public $image = '';
	
	/**
	 * og:image - An image URL which should represent your object within the graph.
	 * @return array
	 */
	public function getImage() {
		return [ 'og:image' => $this->image, ];
	}
	
	/**
	 * og:image - An image URL which should represent your object within the graph.
	 * @param string $image
	 */
	public function setImage( $image ) {
		$this->image = $image;
	}
	
	/**
	 * og:url - The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".
	 * @var string
	 */
	public $url = '';
	
	/**
	 * og:url - The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".
	 * @return array
	 */
	public function getUrl() {
		return [ 'og:url' => $this->url, ];
	}
	
	/**
	 * og:url - The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".
	 * @param string $url
	 */
	public function setUrl( $url ) {
		$this->url = $url;
	}
	
	/**
	 * og:video - A URL to a video file that complements this object.
	 * @var string
	 */
	public $video = '';
	
	/**
	 * og:video - A URL to a video file that complements this object.
	 * @return array
	 */
	public function getVideo() {
		return [ 'og:video' => $this->video, ];
	}
	
	/**
	 * og:video - A URL to a video file that complements this object.
	 * @param string $video
	 */
	public function setVideo( $video ) {
		$this->video = $video;
	}
	
	/**
	 * og:site_name - If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".
	 * @var string
	 */
	public $siteName = '';
	
	/**
	 * og:site_name - If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".
	 * @return array
	 */
	public function getSiteName() {
		return [ 'og:site_name' => $this->siteName, ];
	}
	
	/**
	 * og:site_name - If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".
	 * @param string $site_name
	 */
	public function setSiteName( $site_name ) {
		$this->siteName = $site_name;
	}
	
	/**
	 * og:locale:alternate - An array of other locales this page is available in.
	 * @var string
	 */
	public $localeAlt = '';
	
	/**
	 * og:locale:alternate - An array of other locales this page is available in.
	 * @return array
	 */
	public function getLocaleAlt() {
		return [ 'og:locale:alternate' => $this->localeAlt, ];
	}
	
	/**
	 * og:locale:alternate - An array of other locales this page is available in.
	 * @param string $localeAlt
	 */
	public function setLocaleAlt( $localeAlt ) {
		$this->localeAlt = $localeAlt;
	}
	
	
	/**
	 * og:locale - The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US.
	 * @var string
	 */
	public $locale = '';
	
	/**
	 * og:locale - The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US.
	 * @return array
	 */
	public function getLocale() {
		return [ 'og:locale' => $this->locale, ];
	}
	
	/**
	 * og:locale - The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US.
	 * @param string $locale
	 */
	public function setLocale( $locale ) {
		$this->locale = $locale;
	}
	
	/**
	 * og:determiner - The word that appears before this object's title in a sentence. An enum of (a, an, the, "", auto). If auto is chosen, the consumer of your data should chose between "a" or "an". Default is "" (blank).
	 * @var string
	 */
	public $determiner = '';
	
	/**
	 * og:determiner - The word that appears before this object's title in a sentence. An enum of (a, an, the, "", auto). If auto is chosen, the consumer of your data should chose between "a" or "an". Default is "" (blank).
	 * @return array
	 */
	public function getDeterminer() {
		return [ 'og:determiner' => $this->determiner, ];
	}
	
	/**
	 * og:determiner - The word that appears before this object's title in a sentence. An enum of (a, an, the, "", auto). If auto is chosen, the consumer of your data should chose between "a" or "an". Default is "" (blank).
	 * @param string $determiner
	 */
	public function setDeterminer( $determiner ) {
		$this->determiner = $determiner;
	}
	
	/**
	 * og:description - A one to two sentence description of your object.
	 * @var string
	 */
	public $description = '';
	
	/**
	 * og:description - A one to two sentence description of your object.
	 * @return array
	 */
	public function getDescription() {
		return [ 'og:description' => $this->description, ];
	}
	
	/**
	 * og:description - A one to two sentence description of your object.
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}
	
	/**
	 * og:audio - A URL to an audio file to accompany this object.
	 * @var string
	 */
	public $audio = '';
	
	/**
	 * og:audio - A URL to an audio file to accompany this object.
	 * @return array
	 */
	public function getAudio() {
		return [ 'og:audio' => $this->audio, ];
	}
	
	/**
	 * og:audio - A URL to an audio file to accompany this object.
	 * @param string $audio
	 */
	public function setAudio( $audio ) {
		$this->audio = $audio;
	}
	
	/**
	 * @param $propName
	 * @return string
	 */
	public function createTag( $propName ) {
		if ( !empty($this->$propName) ) {
			$prop = $this->{'get' . ucfirst( $propName )}();
			$key  = array_shift( array_keys( $prop ) );
			return "<meta property=\"{$key}\" content=\"{$prop[$key]}\" />";
		}
		
		return '';
	}
	
	/**
	 * @return string
	 */
	function __toString() {
		$varList    = get_object_vars( $this );
		$returnList = [];
		foreach ( $varList as $index => $value ) {
			if ( !empty($value) ) {
				$returnList[] = $this->createTag( $index );
			}
		}
		
		return implode( "\n", $returnList );
	}
	
}




