<?php /* Template Name: Mat Page2 */?>
<body class="program-overview">
	<header class="header">
		<div class="header-wrap">
		    <div class="announcement"></div>
			<div class="header-container">
				<button type="button" data-toggle-class="menu-active" class="mobile-menu__button-open" title="Menu">Menu</button>
				<div class="logo" title="BASI Pilates" itemscope="" itemtype="http://schema.org/Organization">
					<a href="/" itemscope="" itemprop="url" class="logo__link">BASI Pilates</a>
						<!-- <meta itemscope="" itemprop="logo" content="static/sideadmin/img/admin-login-logo.png"> -->
				</div>
				<ul class="usertools">
					<li class="usertools__item usertools__item--host">
						<a href="/host/" class="usertools__link usertools__link--host">Become a Host</a>
					</li>
					<li class="usertools__item usertools__item--search">
						<a href="#search" title="Search" data-toggle-class="search-active" data-toggle-class-on-then-focus=".header-search__input" class="usertools__link usertools__link--search">Search</a>
					</li>	
				</ul>
			</div>
			<nav class="header-nav">
				<ul class="header-nav__list">
					<li data-subnav="" class="header-nav__item header-nav__item--education">
					    <a href="/education/" data-subnav-link="" class="header-nav__link header-nav__link--active">Education<span class="header-nav__triangle" tabindex="-1"></span></a>
					</li>
					<li class="header-nav__item dropdown__wrap">
						<a href="/e-learning/" class="header-nav__link">E-Learning</a>
                    </li>
					<li class="header-nav__item dropdown__wrap">
						<a class="header-nav__link " href="/studios/">Studios</a>
						<ul class="dropdown dropdown--header">
						    <li class="dropdown__item"><a href="/studio/basi-pilates-studio/usa/ca/costa-mesa/" class="dropdown__link">BASI Studio</a></li>
						    <li class="dropdown__item"><a href="/licensees/" class="dropdown__link">Licensees</a></li>
						    <li class="dropdown__item"><a href="/host-studios/" class="dropdown__link">Host Studios</a></li>
						    <li class="dropdown__item"><a href="/partner-studios/" class="dropdown__link">Partner Studios</a></li>
						</ul>
					</li>
					<li class="header-nav__item header-nav__item--logo">
						<div class="logo" title="BASI Pilates" itemscope="" itemtype="http://schema.org/Organization">
							<a href="/" itemscope="" itemprop="url" class="logo__link header-nav__link--logo">BASI Pilates</a>
						</div>
					</li>
					<li class="header-nav__item dropdown__wrap">
						<a href="/shop/" class="header-nav__link ">Shop</a>
					</li>
					<li class="header-nav__item dropdown__wrap">
						<a class="header-nav__link " href="/social/">Community</a>
					</li>
					<li class="header-nav__item dropdown__wrap">
					    <a href="/about/" class="header-nav__link ">About</a>
					</li>
			    </ul>
		    </nav>
	    </div>
	</header>
	<main class="main">
        <section class="breadcrumbs">
		    <h2 class="hide--visually">Currently Viewing:</h2>
		    <a href="/education/" class="breadcrumbs__link">Education</a>
		    <a href="/education/mat-teacher-training-program/" class="breadcrumbs__link">Mat </a>
	    </section>
	    <section class="header-content" id="info">
		    <div class="header-content__wrap">
			    <div class="header-content__item">
				    <h2 class="header-content__title">Mat Program</h2>
				    <div class="header-content__content">
					    <p>Pilates Mat Teacher Training is the perfect vehicle for learning the principles of the Pilates Method. It is affordable, easy to integrate into different settings, and a great way to introduce people to Pilates. At BASI we regard Pilates Mat Work as the “crown jewel” of Pilates. </p>
                        <p>The Mat Program provides a thorough education in the Pilates Mat Work and its infinite applications. It is also the perfect springboard to the Comprehensive Programs that are offered in the U.S. and globally. The Mat Program is often taught as a part of the Comprehensive Program and is the same curriculum for U.S. and international students.</p>
                        <p>This program is comprised of 24 hours of lecture, discussion, and exercise practice and exercise analysis divided into six modules.</p>
                        <p>Please review our&nbsp;<a href="http://www.basipilates.com/refund-policy" target="_blank" rel="noopener noreferrer">Refund Policy</a>&nbsp;before registering for a program&nbsp;(may not apply to Licensee territories).</p>
                        <p><em><strong>Program schedule is subject to postponement or cancellation, based on student enrollment.</strong></em></p>
                        <p>*All fees are in U.S. Dollars (may not apply to Licensee territories).</p>
				    </div>
			        <button class="header-content__btn" data-scroll-into-view="#courses">Get Started Now</button>
			    </div>
			    <div class="header-content__item">
				    <h3 class="header-content__subtitle">Upon completion of the program, you will be qualified to:</h3>
				    <div class="header-content__content">
					    <ul>
                            <li>Work according to the principles of Pilates and introduce them to clients and students</li>
                            <li>Tailor comprehensive and safe Pilates mat work programs to individual and group needs</li>
                            <li>Adapt a group mat class to different settings</li>
                            <li>Integrate small equipment into a mat class </li>
                            <li>Use the BASI® Block System to successfully administer mat work<br><br></li>
                        </ul>
                        <p><img alt="www.basipilates.com/education/mat-teacher-training-program/" src="//d3a512p2kajs89.cloudfront.net/media/post_content/matprogram-43df.jpg"></p>
                        <p>Have you already taken the Mat Program? <a href="https://youtu.be/KR2xdX2aVN4">Leave a review</a></p>
				    </div>
			    </div>
		    </div>
	    </section>
	        <section class="upcoming" id="courses">
		    <h2 class="related-items__title upcoming__title">Upcoming Mat  Programs</h2>
		    <form action="/education/search/quick/" data-advanced-action="/education/search/" method="post" id="quicksearch" class="upcoming__finder">
			    <input type="hidden" name="csrfmiddlewaretoken" value="BVjMj1uVhoX8AqUg99eP4zKrqAKB8SBi">
			    <input type="hidden" name="program" value="18">
			    <div class="upcoming__form-group">
				    <div class="upcoming__input">
					    <input type="text" name="location" placeholder="City, State" class="upcoming__location">
				    </div>
				    <div class="upcoming__select">
		 			    <select name="sort" class="upcoming__options">
						    <option value="start_date">Sort: Start Date</option>
						    <option value="distance">Sort: Distance</option>
					    </select>
				    </div>
			    </div>
			    <button class="button upcoming__submit">Search</button>
		    </form>
		    <a href="/education/search/?program=18" data-action="advanced-search" class="upcoming__advanced">Advanced Search</a>
		    <ol class="upcoming__results" data-results="">					
	            <li class="location-result">
		            <a href="/education/class/bucharest-romania-mat-19/" class="location-result__link">
			            <p class="locations__branch-name">Bucharest,  ROU</p>
			            <strong class="locations__branch-address">The Pilates Studio</strong>
			            <time class="locations__date-range">07/18/2019-09/13/2019</time>
		            </a>
	            </li>				
	            <li class="location-result">
		            <a href="/education/class/singapore-m/" class="location-result__link">
			            <p class="locations__branch-name">Singapore,  SGP</p>
			            <strong class="locations__branch-address">Upside Motion Orchard</strong>
			            <time class="locations__date-range">08/27/2019-09/25/2019</time>
		            </a>
	            </li>				
	            <li class="location-result">
		            <a href="/education/class/helsinki-finland-ma/" class="location-result__link">
			            <p class="locations__branch-name">Helsinki,  FIN</p>
			            <strong class="locations__branch-address">BAY Helsinki</strong>
			            <time class="locations__date-range">08/30/2019-10/20/2019</time>
		            </a>
	            </li>		
	            <li class="location-result">
		            <a href="/education/class/herndon-va-m/" class="location-result__link">
			            <p class="locations__branch-name">Herndon, VA USA</p>
			            <strong class="locations__branch-address">Balanced Bodies</strong>
			            <time class="locations__date-range">09/06/2019-10/13/2019</time>
		            </a>
	            </li>
	            <li class="location-result">
		            <a href="/education/class/san-diego-ca-mat19-2/" class="location-result__link">
			            <p class="locations__branch-name">San Diego, CA USA</p>
			            <strong class="locations__branch-address">Pilates of San Diego</strong>
			            <time class="locations__date-range">09/06/2019-10/06/2019</time>
		            </a>
	            </li>	
	            <li class="location-result">
		            <a href="/education/class/dusseldorf-germany-mat-19/" class="location-result__link">
			            <p class="locations__branch-name">Dusseldorf,  DEU</p>
			            <strong class="locations__branch-address">Pilates Essenza</strong>
			            <time class="locations__date-range">09/06/2019-11/17/2019</time>
		            </a>
	            </li>	
		    </ol>
		    <a href="#" class="show-more-upcoming" data-toggle-class="upcoming-expanded" data-toggle-class-on="section.upcoming">Show More</a>
		    <a href="#" class="show-less-upcoming" data-toggle-class="upcoming-expanded" data-toggle-class-on="section.upcoming">Show Less</a>
	    </section>
	    <section class="tabular-grid">
		    <div class="wrap" data-tabs="">
			    <menu class="tabular__tab-nav">
				    <ol class="tabular__tab-nav-list">
					    <li class="tabular__tab-nav-item active" data-activate-tab="1">
						    <a href="#tabular-item-1" class="tabular__tab-nav__link">
							    <strong class="tabular__tab-nav-title">Program Structure</strong>
						    </a>
					    </li>
					    <li class="tabular__tab-nav-item" data-activate-tab="3">
						    <a href="#tabular-item-3" class="tabular__tab-nav__link">
						        <strong class="tabular__tab-nav-title">Certification</strong>
						    </a>
					    </li>
					    <li class="tabular__tab-nav-item" data-activate-tab="2">
						    <a href="#tabular-item-2" class="tabular__tab-nav__link">
						        <strong class="tabular__tab-nav-title">Tuition &amp; Fees</strong>
						    </a>
					    </li>
				    </ol>
			    </menu>
			    <div class="tabular__tab-content">
				    <section class="tabular__tab-content-item active" data-tab="1" id="tabular-item-1">
					    <h2 class="program-overview__content-title">Mat  Program Structure</h2>
					    <div class="tabs-grid">
					    	<div class="tabs-grid__item tabs-grid__item--full">
				    			<ol class="programs-overview__courses">
					    			<li class="programs-overview__course" id="programs-overview-1">
						    		    <h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-1">
							    				<span>Module 1 - The Fundamentals</span>
								    	</h3>
									    <div class="accordion-content">
	    								    <p>Primary concepts covered include the 10 movement principles of the Pilates method, an overview of the pelvic region and Pilates breathing. A historical overview of Pilates is presented, plus the BASI® approach, and the importance of safety when teaching Pilates are discussed. Repertoire includes fundamental Mat. A one-hour mat class is taught.</p>
		    							</div>
			    					</li>
				    				<li class="programs-overview__course" id="programs-overview-2">
					    				<h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-2">
						    				<span>Module 2 - Anatomy Overview Part 1</span>
							    		</h3>	
								    	<div class="accordion-content">
	    									<p>Primary concepts covered include an anatomy and terminology overview: major bones, muscles, joints, bony landmarks and center of gravity. The importance and practice of cueing is discussed. Repertoire covered includes intermediate Mat exercises. A one hour mat class is taught.</p>
		    							</div>			
			    					</li>
				    				<li class="programs-overview__course" id="programs-overview-3">
					    				<h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-3">
						    				<span>Module 3 - Anatomy Overview Part 2</span>
							    		</h3>					
								    	<div class="accordion-content">
									    	<p>Primary concepts covered include the BASI® system of movement analysis, exercise physiology, and aerobic/anaerobic exercise. The BASI® format of teaching is discussed and the Block System®, created by Rael Isacowitz, is introduced. Repertoire covered is intermediate Mat and Leg Weights. A one-hour mat class is taught.</p>
									    </div>						
    								</li>
	    							<li class="programs-overview__course" id="programs-overview-4">
		    			        		<h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-4">
			    							<span>Module 4 - Posture Assessment</span>
				    					</h3>					
					    				<div class="accordion-content">
						    				<p>Primary concepts covered are the principles of alignment and posture assessment. Discussion includes exercise as a tool for assessment. Repertoire covered is intermediate through advanced Mat. A one-hour mat class is taught.</p>
							    		</div>					
								    </li>
    								<li class="programs-overview__course" id="programs-overview-5">
	    					    		<h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-5">
		    								<span>Module 5 - Core Strength: Back and Abdominals</span>
			    						</h3>					
				    					<div class="accordion-content">
					    					<p>Primary concepts covered are core strength and the relationship of the various muscle groups that make up the core with particular focus on the abdominals and the back extensors. Contraindications, effective exercises and the importance of understanding your client’s needs and body type are discussed. Also addressed are the role of the teacher and the importance of flow in a session. Repertoire covered is advanced Mat. A one-hour mat class is taught.</p>
						    			</div>						
							    	</li>
								    <li class="programs-overview__course" id="programs-overview-6">
    									<h3 class="program-overview__subtitle" data-toggle-class="programs-overview__course--active" data-toggle-class-on="#programs-overview-6">
	    									<span>Module 6 - Exercise Adaptation</span>
		    							</h3>					
			    						<div class="accordion-content">
				    						<p>Primary concepts include an in-depth look into exercise adaptation and the use of assists and modifications. Lecture focuses on how to construct a complete and comprehensive program. Repertoire covered is advanced Mat and Magic Circle. A one-hour mat class is taught. Final Exam will be available online.</p>
					    				</div>	
						    		</li>
							    </ol>
	    					</div>
		    			</div>
			    	</section>
				    <section class="tabular__tab-content-item" data-tab="2" id="tabular-item-2">
    					<h2 class="program-overview__content-title">Tuition &amp; Fees</h2>
	    				<div class="tabs-grid">
		    				<div class="tabs-grid__item tabs-grid__item--full">
			    				<p>(Please note the tuition price may vary by country.)</p>
                                <p><b>Tuition &amp; Fees</b>
                                </p><p> $1,099 USD- US </p><p>
                                </p><p> $1,095 USD- Select countries </p><p></p>
                                <p> $500 USD Initial Deposit (includes the Non-Refundable $100 USD Processing Fee). The balance is to be paid up to 10 business days prior to commencement of the program.</p>
                                <p>Tuition includes: registration, one (1) Study Guide, one (1) movement analysis workbook, and one (1) written examination.</p>
                                <p><strong>Additional Fees may include:</strong>
                                </p><p>•    Final Teaching/Practical Testing Fees: $150 USD (typcially taken together)</p>
                                <p>•    Obtain Observation, Self-Practice and Student Teaching Hours</p>
                                <p>•    Subscription to Pilates Interactive, $10 USD/monthly</p>
                                <p>•    Other resources or suggesting reading materials that are not included in the tuition. Please contact BASI HQ (US) for the list of Suggested Readings</p>
                                <p>Tuition fees charged by international BASI licensees may differ from those specified here. For up-to-date international payment information, please see the appropriate website of <a href="http://www.basipilates.jp/">BASI Japan</a>, <a href="http://www.aasfp.com/">BASI China</a>, <a href="http://basipilates.de/">BASI Germany</a>, <a href="http://www.nysystudios.com/pilatestraining.asp">BASI Greece</a> and <a href="http://www.pilatessa.co.za">BASI South Africa</a>.</p>
                                <p>Method of payment is accepted by credit card (Visa, MasterCard, AmEx, Discover) or bank transfer. If paying by bank transfer, all bank fees will be the sole responsibility of the enrolled student at time of payment.</p>
                                <p>Please review our&nbsp;<a href="http://www.basipilates.com/refund-policy" target="_blank" rel="noopener noreferrer">Refund Policy</a>&nbsp;before registering for a program&nbsp;(may not apply to Licensee territories).</p>
	    					</div>
		    			</div>
			    	</section>				
				    <section class="tabular__tab-content-item" data-tab="3" id="tabular-item-3">
    					<h2 class="program-overview__content-title">Teaching Credential</h2>
	    				<div class="tabs-grid">
		    				<div class="tabs-grid__item tabs-grid__item--full">
			    				<p><strong><b>Requirements for Certification</b></strong>
                                </p><p>•Attendance of all 6 Modules</p><p>
                                </p><p>•Observation: 15 hours (50% can be completed using only <a href="https://www.pilatesinteractive.com">Pilates Interactive</a>)<em>.</em></p><p><em>
                                </em></p><p><em>•Self Practice: 40 Hours</em></p><p><em>
                                </em></p><p><em>•Student Teaching: 30 Hours</em></p><p><em>
                                </em></p><p><em>We recommend that you start working on your hours as soon as you begin the program.</em></p><p><em>
                                </em></p><p><em>•Final Written Exam</em></p><p><em>
                                </em></p><p><em>•Teaching Evaluation</em></p><p><em>
                                </em></p><p><em>•Practical Exam</em></p><p><em>
                                </em></p><p><em> Passing grade of 70% or better on all examinations.</em></p><p><em>
                                </em></p><p>Final Teaching and Practial Exams are to be taken during the next Comprehensive Global Program at your host studio or at any other host studio worldwide.</p><p>
                                </p><p>Testing Fees are required. For more information go to <a href="https://www.basipilates.com/examination-process//"> Examination Process.</a></p><p></p>
                                <p>All requirements should be completed within one-year of the last module of your program. However, we are happy to give an extension, if needed. If the requirements are not completed within three years, we may require the student to repeat 50% of the program prior to receiving a BASI Teacher Certificate. </p>
	    					</div>
		    			</div>
			    	</section>
    			</div>
	    	</div>
    	</section>
    </main>
	<footer class="footer">
		<a href="/" class="footer__logo">BASI Pilates</a>
		<nav class="footer-nav">
			<ul class="footer-nav__list">
				<li class="footer-nav__item">
					<a href="/account/" class="footer-nav__link">My Account</a>
				</li>
				<li class="footer-nav__item">
					<a href="/terms/" class="footer-nav__link">Terms</a>
				</li>
				<li class="footer-nav__item">
					<a href="/privacy/" class="footer-nav__link">Privacy</a>
				</li>
				<li class="footer-nav__item">
					<a href="/contact-us/" class="footer-nav__link">Contact Us</a>
				</li>
			</ul>
		</nav>
		<ol class="social__list social--footer">			
			<li class="social__item social__item--footer">
				<a href="http://www.facebook.com/basipilates" class="social__link social__link--facebook" title="BASI Pilates on Facebook" target="_blank" rel="noopener noreferrer">Facebook</a>
			</li>
			<li class="social__item social__item--footer">
				<a href="http://www.instagram.com/basipilates" class="social__link social__link--instagram" title="BASI Pilates on Instagram" target="_blank" rel="noopener noreferrer">Instagram</a>
			</li>
			<li class="social__item social__item--footer">
				<a href="http://www.twitter.com/basipilates" class="social__link social__link--twitter" title="BASI Pilates on Twitter" target="_blank" rel="noopener noreferrer">Twitter</a>
			</li>
			<li class="social__item social__item--footer">
				<a href="https://www.youtube.com/channel/UCNliwEbwMLoeZXSXNnKb-6g" class="social__link social__link--youtube" title="BASI Pilates on Youtube" target="_blank" rel="noopener noreferrer">Youtube</a>
			</li>
			<li class="social__item social__item--footer">
				<a href="https://plus.google.com/u/4/118121651053984764639" class="social__link social__link--google_plus" title="BASI Pilates on Google Plus" target="_blank" rel="noopener noreferrer">Google Plus</a>
			</li>		
            <li class="social__item social__item--footer">
                 <a href="https://www.linkedin.com/company/1902761/" class="social__link social__link--linkedin" title="BASI Pilates on LinkedIn" target="_blank" rel="noopener noreferrer">Linked In</a>
            </li>
		</ol>
		<small class="copyright">© 2019 BASI Pilates ®. All rights reserved.</small>
	</footer>
<?php
