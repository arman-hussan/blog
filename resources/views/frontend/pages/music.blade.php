@extends('welcome')
@section('content')
<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Music PAge</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">MUSIC</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">


        <!-- player code -->   
        <div id="hap-wrapper">
        
       		<div class="hap-player-holder">
             
                <div class="hap-media-title-mask">
                 	<div class="hap-media-title">Artist&nbsp;Name&nbsp;-&nbsp;Song&nbsp;Title</div>
                </div>
                  
                <p class="hap-media-time-total">0:00</p>
                <p class="hap-media-time-separator">&#47;</p>
              	<p class="hap-media-time-current">0:00</p>
             
                <div class="hap-player-controls">
                    <div class="hap-prev-toggle hap-contr-btn"><i class="fa fa-step-backward hap-contr-btn-i hap-icon-color"></i></div>
                    <div class="hap-playback-toggle hap-contr-btn"><i class="fa fa-play hap-contr-btn-i hap-icon-color"></i></div>
                    <div class="hap-next-toggle hap-contr-btn"><i class="fa fa-step-forward hap-contr-btn-i hap-icon-color"></i></div>
                      
                    <div class="hap-player-volume hap-toggle-mute hap-contr-btn"><i class="fa fa-volume-up hap-contr-btn-i hap-icon-color"></i></div>
                    <div class="hap-volume-seekbar hap-tooltip-item">
                         <div class="hap-volume-bg"></div>
                         <div class="hap-volume-level"></div>
                    </div>

                    <div class="hap-loop-toggle hap-contr-btn hap-tooltip-item" data-tooltip="Loop"><i class="fa fa-refresh hap-contr-btn-i hap-icon-color"></i></div>
                    <div class="hap-random-toggle hap-contr-btn hap-tooltip-item" data-tooltip="Shuffle"><i class="fa fa-random hap-contr-btn-i hap-icon-color"></i></div>
                </div>

                <div class="hap-seekbar-inner hap-tooltip-item">
                    <div class="hap-progress-bg"></div>
                    <div class="hap-load-level"></div>
                    <div class="hap-progress-level"></div>
                </div>
                  
            </div>
              
            <div class="hap-playlist-holder">
                <div class="hap-playlist-filter-msg"><p>NOTHING FOUND!</p></div>
                <div class="hap-playlist-inner">
                    <div class="hap-playlist-content">
                     	<!-- playlist items are appended here! --> 
                    </div>
                </div>
                
                <div class="hap-preloader"></div>

                <div class="hap-bottom-bar">

                    <input class="hap-search-filter" type="text" value="filter...">
                    <div class="hap-sort-alpha hap-tooltip-item" data-tooltip="Alphabetic sort"><i class="fa fa-sort-alpha-desc hap-sr-bar-i hap-icon-color"></i></div>

                    <div class="hap-share-item hap-tooltip-item" data-type="googleplus" data-tooltip="Share on Google+"><i class="fa fa-google-plus hap-sr-bar-i hap-icon-color"></i></div>
                    <div class="hap-share-item hap-tooltip-item" data-type="tumblr" data-tooltip="Share on Tumblr"><i class="fa fa-tumblr hap-sr-bar-i hap-icon-color"></i></div>
                    <div class="hap-share-item hap-tooltip-item" data-type="twitter" data-tooltip="Share on Twitter"><i class="fa fa-twitter hap-sr-bar-i hap-icon-color"></i></div>
                    <div class="hap-share-item hap-tooltip-item" data-type="facebook" data-tooltip="Share on Facebook"><i class="fa fa-facebook hap-sr-bar-i hap-icon-color"></i></div> 
                    
                </div>

            </div>

            <div class="hap-download-confirm"><p>DOWNLOAD STARTED!</p></div>  

            <div class="hap-tooltip"><p></p></div>  
        
        </div>  

        <!-- PLAYLIST LIST -->
        <div id="hap-playlist-list">

             <!-- audio playlist -->
             <ul id="playlist-audio1">
                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/04.mp3" data-artist="Tim McMorris" data-title="Happy Days Are Here To Stay" data-share="http://audiojungle.net/item/happy-days-are-here-to-stay/484531?ref=Tean"></li>
             
                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/01.mp3" data-artist="Tim McMorris" data-title="A Bright And Hopeful Future" data-download="media/audio/1/main/01.mp3" data-link="http://codecanyon.net/user/Tean/portfolio" data-target="_blank" data-share="http://audiojungle.net/item/a-bright-and-hopeful-future/236175?ref=Tean"></li>
                  
                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/03.mp3" data-artist="Tim McMorris" data-title="Give Our Dreams Their Wings To Fly" data-download="media/audio/1/main/03.mp3" data-share="http://audiojungle.net/item/give-our-dreams-their-wings-to-fly/151759?ref=Tean"></li>

                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/06.mp3" data-artist="Tim McMorris" data-title="Marketing Advertising Music" data-share="http://audiojungle.net/item/marketing-advertising-101/240408?ref=Tean"></li>

                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/07.mp3" data-artist="Tim McMorris" data-title="Successful Business Venture" data-share="http://audiojungle.net/item/successful-business-venture/154097?ref=Tean"></li> 

                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/05.mp3" data-artist="Tim McMorris" data-title="Health Happiness Success" data-link="http://codecanyon.net/user/Tean/portfolio" data-share="http://audiojungle.net/item/health-happiness-success/178810?ref=Tean"></li> 

                <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/02.mp3" data-artist="Tim McMorris" data-title="Be My Valentine" data-share="http://audiojungle.net/item/be-my-valentine/154579?ref=Tean"></li>
              
             </ul>
             
             <ul id="playlist-audio2">
                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/01.mp3" data-artist="Soundroll" data-title="A Way To The Top" data-link="http://codecanyon.net/user/Tean/portfolio" data-share="http://audiojungle.net/item/a-way-to-the-top/162200?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/02.mp3" data-artist="Soundroll" data-title="Feel Good Journey" data-download="media/audio/2/main/02.mp3" data-share="http://audiojungle.net/item/feel-good-journey/119565?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/03.mp3" data-artist="Soundroll" data-title="Fight No More" data-link="http://www.google.com" data-download="media/audio/2/main/03.mp3" data-share="http://audiojungle.net/item/fight-no-more/143561?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/04.mp3" data-artist="Soundroll" data-title="Funky Boom" data-link="http://codecanyon.net/user/Tean/portfolio" data-share="http://audiojungle.net/item/funky-boom/127833?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/05.mp3" data-artist="Soundroll" data-title="Pump The Club" data-share="http://audiojungle.net/item/pump-the-club/166358?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/06.mp3" data-artist="Soundroll" data-title="Rush" data-share="http://audiojungle.net/item/rush/118500?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/2/main/07.mp3" data-artist="Soundroll" data-title="Sun Is So Bright" data-link="http://www.google.com" data-target="_blank" data-share="http://audiojungle.net/item/sun-is-so-bright/134956?ref=Tean"></li>
             </ul>
             
             <!-- podcast playlists -->
             <ul id="playlist-podcast2">
                 <li class="hap-playlist-item" data-type="podcast" data-path="http://www.kingola.com/feed/podcast/" data-link="http://codecanyon.net/user/Tean/portfolio" data-target="_blank" data-limit="14"></li>
             </ul>
             <ul id="playlist-podcast4">
                 <li class="hap-playlist-item" data-type="podcast" data-path="http://robertkelly.libsyn.com/rss"></li>
             </ul>
                    
             <!-- Soundcloud playlists -->
             <!-- track set -->
             <ul id="playlist-soundcloud1">
                <li class="hap-playlist-item" data-type="soundcloud" data-path="http://soundcloud.com/trance/sets/magix-revolta-2/" data-limit="12" data-download data-share></li>
             </ul>
             <!-- user tracks -->
             <ul id="playlist-soundcloud2">
                <li class="hap-playlist-item" data-type="soundcloud" data-path="http://soundcloud.com/computer-magic" data-download data-limit="8"></li>
             </ul>
             <!-- single track -->
             <ul id="playlist-soundcloud3">
                <li class="hap-playlist-item" data-type="soundcloud" data-path="http://soundcloud.com/trance/trance-single-138-bpm-anvil" data-link="http://codecanyon.net/user/Tean/portfolio" data-download></li>
             </ul>
             <!-- user favorites -->
             <ul id="playlist-soundcloud4">
                <li class="hap-playlist-item" data-type="soundcloud" data-path="http://soundcloud.com/an21/likes" data-download></li>
             </ul>
             <!-- groups -->
             <ul id="playlist-soundcloud5">
                <li class="hap-playlist-item" data-type="soundcloud" data-path="https://soundcloud.com/gatecrasherish-trance/sets/simply-outstanding-1" data-limit="5" data-download></li>
             </ul>
             
             <!-- folder playlist -->
             <ul id="playlist-folder1">
                <li class="hap-playlist-item" data-type="folder" data-path="../mp3-dir/audio1" data-id3 data-share data-download data-limit="5"></li>
             </ul>

             <ul id="playlist-folder2">
                  <li class="hap-playlist-item" data-type="folder" data-path="C:\xampp\htdocs\xampp\js\hap\_PREVIEW\content\mp3-dir\audio1" data-id3="1" ></li>
             </ul>

             <!-- google drive folder playlist -->
             <ul id="playlist-gdrive-folder1">
                 <li class="hap-playlist-item" data-type="gdrive-folder" data-path="0ByzcNpNrQNpWbjJGY19NSFF0R3M" data-share data-download></li> 
             </ul>

             <!-- xml playlist -->
             <ul id="playlist-xml1">
                <li class="hap-playlist-item" data-type="xml" data-path="xml/1.xml"></li>
             </ul>
             
             <!-- youtube singles -->
             <ul id="playlist-yt1">
                 <li class="hap-playlist-item" data-type="youtube_single" data-path="lWA2pjMjpBs" data-share></li>
                 <li class="hap-playlist-item" data-type="youtube_single" data-path="ZQ2nCGawrSY"></li>
                 <li class="hap-playlist-item" data-type="youtube_single" data-path="tg00YEETFzg"></li>
                 <li class="hap-playlist-item" data-type="youtube_single" data-path="yd8jh9QYfEs"></li>
                 <li class="hap-playlist-item" data-type="youtube_single" data-path="bnVUHWCynig"></li>
             </ul>

             <!-- youtube single list -->
             <ul id="playlist-yt2">
                 <li class="hap-playlist-item" data-type="youtube_single_list" data-path="lWA2pjMjpBs,ZQ2nCGawrSY,tg00YEETFzg,yd8jh9QYfEs,bnVUHWCynig" data-link="http://www.google.com"></li>
             </ul>
             
             <!-- youtube playlist -->
             <ul id="playlist-yt3">
                 <li class="hap-playlist-item" data-type="youtube_playlist" data-path="LL2pmfLm7iq6Ov1UwYrWYkZA" data-limit="11"></li> 
             </ul>
             
             <!-- database playlist -->
             <ul id="playlist-database1">
                 <li class="hap-playlist-item" data-type="database_data" data-path="hap" data-table="audio_data"></li> 
             </ul>
             <ul id="playlist-database2">
                 <li class="hap-playlist-item" data-type="database_html" data-path="hap" data-table="audio_html"></li> 
             </ul>
             <ul id="playlist-database3">
                 <li class="hap-playlist-item" data-type="database_data" data-path="hap" data-table="mixed_data" data-range="1,1"></li> 
             </ul>
             <ul id="playlist-database4">
                 <li class="hap-playlist-item" data-type="database_html" data-path="hap" data-table="mixed_data" data-limit="2"></li> 
             </ul>
             
             <!-- mixed playlist -->
             <ul id="playlist-mixed1">  
           		 
                 <li class="hap-playlist-item" data-type="audio" data-mp3="media/audio/1/main/04.mp3" data-artist="Tim McMorris" data-title="Happy Days Are Here To Stay" data-share="http://audiojungle.net/item/happy-days-are-here-to-stay/484531?ref=Tean"></li>

                 <li class="hap-playlist-item" data-type="soundcloud" data-path="http://soundcloud.com/an21/likes" data-download data-limit="3"></li>

                 <li class="hap-playlist-item" data-type="youtube_single" data-path="lWA2pjMjpBs"></li>

             </ul>
             
        </div>

        <!-- API -->

        <div id="api-panel">
            <div class="api-panel-inner">
                <ul>
            
                    <li><a href="#" onClick="hap_player.playMedia(); return false;">Play current media</a></li>
                    <li><a href="#" onClick="hap_player.pauseMedia(); return false;">Pause current media</a></li>
                    <li><a href="#" onClick="hap_player.togglePlayback(); return false;">Toggle playback</a></li>
                    <li><a href="#" onClick="hap_player.nextMedia(); return false;">Play next media</a></li>
                    <li><a href="#" onClick="hap_player.previousMedia(); return false;">Play previous media</a></li>
                    <li><a href="#" onClick="hap_player.setVolume(0); return false;">Set volume (0)</a></li>
                    <li><a href="#" onClick="hap_player.setVolume(0.5); return false;">Set volume (0.5)</a></li>
                    <li><a href="#" onClick="hap_player.setVolume(1); return false;">Set volume (1)</a></li>
                    <li class="space"><a href="#" onClick="hap_player.toggleMute(); return false;">Toggle mute</a></li>

                    <li><a href="#" onClick="hap_player.seek(0); return false;">seek (0)</a></li>
                    <li><a href="#" onClick="hap_player.seek(5); return false;">seek (5)</a></li>
                    <li class="space"><a href="#" onClick="hap_player.seek(15); return false;">seek (15)</a></li>

                    <li><a href="#" onClick="hap_player.setPlaybackRate(0.5); return false;">Set playback rate (0.5)</a></li>
                    <li><a href="#" onClick="hap_player.setPlaybackRate(1); return false;">Set playback rate (1)</a></li>
                    <li class="space"><a href="#" onClick="hap_player.setPlaybackRate(2); return false;">Set playback rate (2)</a></li>

                    <li><a href="#" onClick="hap_player.toggleRandom(); return false;">Toggle random</a></li>
                    <li class="space"><a href="#" onClick="hap_player.toggleLoop(); return false;">Toggle loop</a></li>

                    <li><a href="#" onClick="hap_player.destroyMedia(); return false;">Destroy media</a></li>
                    <li class="space"><a href="#" onClick="hap_player.destroyPlaylist(); return false;">Destroy playlist</a></li>

                    <li class="space"><a href="#" onClick="console.log(hap_player.getPlaylistData()); return false;">Get playlist data</a></li>    
                    
                    <li><a href='#' onClick="hap_player.inputAudio(hap_track_list_data1[0]); return false;">Input track "Tim McMorris - A Bright And Hopeful Future"</a></li>
                    <li><a href='#' onClick="hap_player.inputAudio(hap_track_list_data1[1]); return false;">Input track "Tim McMorris - Be My Valentine"</a></li>
                    <li class="space"><a href='#' onClick="hap_player.inputAudio(hap_track_list_data1[2]); return false;">Input track "Tim McMorris - Give Our Dreams Their Wings To Fly"</a></li>

                    <!-- load track -->
                    <li><a href="#" onClick="hap_player.loadMedia(0); return false;">load track 0</a></li>
                    <li><a href="#" onClick="hap_player.loadMedia(1); return false;">load track 1</a></li>
                    <li class="space"><a href="#" onClick="hap_player.loadMedia(2); return false;">load track 2</a></li>  
                    
                    <li><a href="#" onClick="hap_player.loadMedia('A Bright And Hopeful Future'); return false;">Load track with title "Tim McMorris - A Bright And Hopeful Future"</a></li>
                    <li><a href="#" onClick="hap_player.loadMedia('Be My Valentine'); return false;">Load track with title "Tim McMorris - Be My Valentine"</a></li>
                    <li><a href="#" onClick="hap_player.loadMedia('A Way To The Top'); return false;">Load track with title "Soundroll - A Way To The Top"</a></li>
                    <li class="space"><a href="#" onClick="hap_player.loadMedia('Feel Good Journey'); return false;">Load track with title "Soundroll - Feel Good Journey"</a></li>

                    <!-- load playlist -->
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-audio1'); return false;">Load playlist-audio1</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-audio2'); return false;">Load playlist-audio2</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-yt1'); return false;">Load playlist-youtube1</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-yt3'); return false;">Load playlist-youtube3</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-podcast1'); return false;">Load playlist-podcast1</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-podcast2'); return false;">Load playlist-podcast2</a></li>
                    <li><a href="#" onClick="hap_player.loadPlaylist('playlist-soundcloud1'); return false;">Load playlist-soundcloud1</a></li>
                    <li class="space"><a href="#" onClick="hap_player.loadPlaylist('playlist-soundcloud2'); return false;">Load playlist-soundcloud2</a></li>

                    <!-- add track -->
                    <!-- html tracks -->
                    <li><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1[0], false, 0); return false;">Add track, position 0</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1[1], false, 1); return false;">Add track, position 1</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1[2], false, 2); return false;">Add track, position 2</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1[1], true, 1); return false;">Add track, play it, position 1</a></li>
                    <li class="space"><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1[1]); return false;">Add track, position end</a></li>  

                    <li><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1, false, 0); return false;">Add track array, position 0</a></li>
                    <li class="space"><a href="#" onClick="hap_player.addTrack('html', hap_track_list_html1, true, 2); return false;">Add track array, play it, position 2</a></li>

                    <!-- data tracks -->



                    <li><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2[0], false, 0); return false;">Add track, position 0</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2[1], true, 1); return false;">Add track, play it, position 1</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2[2], false, 2); return false;">Add track, position 2</a></li>
                    <li><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2[3], false, 0); return false;">Add track, position 0</a></li>
                    <li class="space"><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2[4], false, 0); return false;">Add track, position 0</a></li>

                    <li class="space"><a href="#" onClick="hap_player.addTrack('data', hap_track_list_data2, false, 0); return false;">Add track array, position 0</a></li>
                    
                    <!-- remove track -->
                    <li><a href="#" onClick="hap_player.removeTrack(0); return false;">Remove track 0</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack(1); return false;">Remove track 1</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack(2); return false;">Remove track 2</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack(3); return false;">Remove track 3</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack(hap_player.getPlaylistLength()-1); return false;">Remove last track in playlist</a></li>
                    <li class="space"><a href="#" onClick="hap_player.destroyPlaylist(); return false;">Remove all tracks</a></li>
                    
                    <li><a href="#" onClick="hap_player.removeTrack('A Bright And Hopeful Future'); return false;">Remove track with title "Tim McMorris - A Bright And Hopeful Future"</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack('Be My Valentine'); return false;">Remove track with title "Tim McMorris - Be My Valentine"</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack('Give Our Dreams Their Wings To Fly'); return false;">Remove track with title "Tim McMorris - Give Our Dreams Their Wings To Fly"</a></li>
                    <li><a href="#" onClick="hap_player.removeTrack('A Way To The Top'); return false;">Remove track with title "Soundroll - A Way To The Top"</a></li>
                    <li class="space"><a href="#" onClick="hap_player.removeTrack('Feel Good Journey'); return false;">Remove track with title "Soundroll - Feel Good Journey"</a></li>

                    <!-- sort -->
                    <li><a href="#" onClick="hap_player.sort('title'); return false;">Sort title ascending</a></li>
                    <li><a href="#" onClick="hap_player.sort('title', true); return false;">Sort title descending</a></li>
                    <li class="space"><a href="#" onClick="hap_player.sort('random'); return false;">Sort random</a></li>
                    
                    <li><a href="#" onClick="hap_player.setTitle('Lorem ipsum dolor sit amet'); return false;">Set title ('Lorem ipsum dolor sit amet')</a></li>
                    <li><a href="#" onClick="hap_player.getTitle(0); return false;">Get title</a></li>

                </ul>
            </div>
        </div>
         
        <div class="toggle-panel"></div>
		



			</div>
		</div>
	</section>
	<!-- Category section end -->
@endsection

