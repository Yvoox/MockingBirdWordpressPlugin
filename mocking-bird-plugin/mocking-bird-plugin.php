<?php
/**
 * Plugin Name: Mocking Bird Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: Integrate your MockingBird Bot into your Wordpress without any configuration
 * Version: 1.0
 * Author: Alexandre Colicchio
 * Author URI: http://www.mywebsite.com
 */

 add_action( 'the_content', 'inject_mockingbird_bot' );

 function inject_mockingbird_bot ( $content ) {
     return $content .= '    <!-- Enjoy your MockingBird Bot ! -->
     <style>
       .chat-popup {display: none;position: fixed;bottom: 0;right: 15px;border: 3px solid #f1f1f1;z-index: 9;}
       #chatPop{text-shadow: 0 0 3px white;;color:#367fa9;font-size: 70px;position: fixed;bottom: 65px;right: 30px;cursor:pointer;}
     </style>
     <a id="chatPop" onclick="openChat()"><i class="fa fa-comment" ></i></a>
     <div class="chat-popup" id="chatBot">
       <div style="display:inline-block;vertical-align:middle;">
         <p style="position:absolute;right:0;"><button type="button" onclick="closeForm()">-</button></p>
         <iframe id="chatIframe"
           allow="microphone"
           title="Your Chatbot"
           height="500"
           width="500"
           src="http://localhost:8081/chat.html?token=MON_API_TOKEN">
         </iframe>
       </div>
     </div>
     <script>
       function openChat() {document.getElementById("chatBot").style.display = "block";}
       function closeForm() {document.getElementById("chatBot").style.display = "none";}
     </script>
     <!-- End MockingBird bot-->';
 }
