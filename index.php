<?php
/*
  Created originally on : 01-07-2014
  Modifications on : 14-11-2014

  Company     : SaaSify Ltd.
  Author      : Eamonn Killian
  Web         : www.eamonnkillian.com, www.saasifyltd.com
  Contact     : eamonnkillian@gmail.com

  This is the main index file for a new responsive web design as the basis for
  my sites. The renewed look is aiming for flatness and comprehensive device
  awareness and resizing. I decided to write what is essentially my own Javascript
  with JQuery version of BootStrap.

 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/public/basetheme.css"> 
        <title></title>
    </head>
    <body class="body">
        
        <?php require 'libs/Loader.php' ?>
        
        <div class="tooltip"></div>
        <div class="base_full_window">
            <div class="base_full_menu">
                <div class="base_full_menu_span"></div>
                <div class="base_full_menu_span"></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/home.png" frameref='frame-0' name="HOME"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/cloud.png" frameref='frame-2' name="CLOUD"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/mmog.png" frameref='frame-3' name="MMOG / GAMING"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/gamification.png" frameref='frame-4' name="GAMIFICATION"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/bigdata.png" frameref='frame-5' name="BIGDATA"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/tables.png" frameref='frame-6' name="APPLICATIONS"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/download.png" frameref='frame-7' name="DOWNLOADS"/></div>
                <div class="base_full_menu_span"><img class="base_full_menu_span_image" src="img/public/share.png" frameref='frame-8' name="SHARE"/></div>
                <div class="base_full_menu_span"></div>
                <div class="base_full_menu_span"></div>
            </div>
            <div class="floating_menu">
                <div class="floating_menu_span"><img id="altmenu" class="floating_menu_span_image" src="img/public/menu.png" frameref='frame-0' name="HOME"/></div>
            </div>
            <div class="slideout_menu">
                <ul>
                    <li frameref='frame-0'>Home</li>
                    <li frameref='frame-2'>Cloud</li>
                    <li frameref='frame-3'>MMOG / Gaming</li>
                    <li frameref='frame-4'>Gamification</li>
                    <li frameref='frame-5'>BigData</li>
                    <li frameref='frame-6'>Applications</li>
                    <li frameref='frame-7'>Downloads</li>
                    <li frameref='frame-8'>Share</li>
                </ul>
            </div>
            <div class="base_full_viewer">
                <div class="base_full_viewer_frame" id="frame-0">
                    <div class='base_full_viewer_frame_top'>
                        <span id="webtitle">CONVE<span class='backward'>R</span>&#8201;GENCE</span>
                        <!-- Thanks Ez for the great idea of a backwards R -->
                    </div>
                    <div class="base_full_viewer_frame_continue">
                        <span id="continuearrow">&#x25BC;</span>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-1">
                    <div class='base_full_viewer_frame_inner' id='base_full_viewer_frame_inner'>

                        <p>
                            The purpose of this website is to harness the many years of acquired knowledge concerning the design, 
                            implementation, integration, promotion, commercialisation and operation of information technology (IT) platforms. 
                            Of course, this knowledge was not assimilated in a vacuum and the information technologies first 
                            implemented in London’s financial market companies has evolved to be orders of magnitude more complex 
                            today than those of previous decades. Today’s paradigm shift towards Cloud Services represents merely the latest inculcation in a ceaseless 
                            march towards an “Internet of Everything”. This vast matrix of interconnection will bring a tsunami of 
                            change and information technology<strong> convergence </strong>over the next decades that will transform the lives of every consciousness on this small (as yet) 
                            insignificant rock of ours. 
                        </p>
                        <p>
                            The infinity of complexity that is dawning before us requires a new approach 
                            within the information technology ecosystem and this site represents an attempt to isolate four small 
                            corners of that infinity and to relay as much materially useful information as possible in the hope 
                            that others can initiate, innovate and imaginate. Those core domains of focus are:
                        <ul>
                            <li>
                                <strong>Cloud</strong> - providing all IT services from across the Internet;
                            </li>
                            <li>
                                <strong>Gamification</strong> - Integrating game techniques into all applications;
                            </li>
                            <li>
                                <strong>MMOG</strong> - Incorporating technologies from Massive Multiuser Online Gaming (MMOG);
                            </li>
                            <li>
                                <strong>Big Data</strong> - handling yottabyte sizes of data.
                            </li>
                        </ul>
                        </p>

                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-2">
                    <div class="sidearrow"><img class='leftsidearrow' src="img/public/goleftarrow.png" id='cloudleft' reveal='cloud-0' thiscontainer='cloud-1'/></div>
                    <div class="sidearrow"><img class='rightsidearrow' src="img/public/gorightarrow.png" id='cloudright' reveal='cloud-1' thiscontainer='cloud-0'/></div>
                    <div class='base_full_viewer_frame_inner' id="cloud-0">

                        <h3>Introduction to Cloud Computing</h3>
                        The growth in use of IT has been astounding over the past five decades. From the outset in the 1930s to 1960s 
                        it would have been clear to Alan Turing, John Von Newman, John Bardeen, William Shockley, Walter Brattain, 
                        John Presper Ekhert, John Mauchly, & Federico Faggin that computers would become vastly complex computational 
                        devices capable of helping governments and businesses streamline operations, develop deeper insights, 
                        improve experimental outcomes, etc. In the 1970s a pioneering movement emerged around the creation of the 
                        Personal Computer (PC) spearheaded by people such as Paul Allen, Bill Gates, Steve Jobs and latterly the 
                        emergence of the home computer with inventors and innovators such as Sir Clive Sinclair, Hermann Hauser, 
                        and Christopher Curry. These inventions had an astounding impact on our societies. They were and are being 
                        eclipsed though: 
                        <ul>
                            <li>
                                First, by the introduction of the SmartPhone to the market, first in the guise of the Nokia Communicator, 
                                Kyocera 6035 and the Blackberry but more importantly was the introduction in June 2007 of the Apple 
                                iPhone which opened up possibilities far beyond the mundane email, calendar and messaging; and 
                            </li>
                            <li>
                                Secondly, by the introduction of the tablet computer in April 2010 – the Apple iPAD which spawned a new 
                                era of personal computing and has grown in popularity almost exponentially.
                            </li>
                        </ul>

                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-1">
                        <h3>What does this have to do with Cloud?</h3>
                        <p>In a nutshell applications and processing. The growth in computing includes all type of computers whether large 
                            scale systems housed in enterprise data centres or handheld devices. The applications or workloads speaks for itself in July 
                            of 2014 there were 1.2 million apps available on the Apple App Store and 1.3 million on the Google Play 
                            Store. Sales of tablets and SmartPhones vastly outnumber those of PCs and Laptops.</p>
                        <span class="imagespan">
                            <img class='big-image' id='devicesglobally' src='img/public/globalconnecteddevices.png'/>
                        </span>
                        <div class='sources'>Sources: <br/>
                            <a href='http://blog.geoactivegroup.com/2012/12/dateline-2013-samsung-and-apple-battle.html'>
                                dateline-2013-samsung-and-apple-battle;
                            </a><br/>
                            <a href='http://www.statista.com/statistics/276623/number-of-apps-available-in-leading-app-stores/'>
                                number-of-apps-available-in-leading-app-stores.</a>
                        </div>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-2">
                        <p>Each of these devices is driven by the insatiable desire of users to run apps of all kinds. This in turn 
                            drives the need for developers and service providers to emerge to fill this void. For instance, look at 
                            the enormous growth in Google searches since 2007!</p>
                        <p>Many of these emergent service providers realised that there was a growing need in the market for services 
                            related to these devices themselves.</p>
                        <span class="halfimagespan">
                            <img class='small-image' id='googlesearches' src='img/public/googlesearches.png'/>
                        </span>
                        <span class="halfimagespan">
                            <img class='small-image' id='dataexplosion' src='img/public/dataexplosion.png'/>
                        </span>
                        <p>Users were taking huge quantities of videos and pictures which they wanted to store in secure areas, others 
                            wanted to store documents and spread sheets, others to play online games with saved statuses, etc. This 
                            coupled with the emergence in businesses of Machine-to-Machine (M2M) communications, sensors & actuators 
                            in almost everything, Building Management Systems (BMS), and many more areas has led to an exponential 
                            rise in the amount of computing and storage resources consumed globally. In an EMC study the prediction 
                            is for 7.9 Exabytes Per Day by 2015!</p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-3">
                        <p>This rampant demand requires a new paradigm of computing to be developed which can scale to meet these 
                            ceaseless growth challenges. This is where Cloud Computing comes enters.</p>
                        <h3>So What is Cloud Computing?</h3>
                        <p>The United States National Institute of Standards and Technology (NIST) has kindly provided a definition 
                            for Cloud Computing which outlines the specific traits and characteristics an IT provision should 
                            exhibit to be classed as Cloud Computing.</p>
                        <p>
                            It is worth noting that in “marketing” terms, and to be fair given the nascent state of Cloud Computing today, 
                            many provisions offered in the IT market today do not precisely conform to these standards but are 
                            nevertheless advertised as Cloud Computing. They identify a Cloud Computing as: </p>
                        <p style='font-style:italic;width:60%;margin-left:20%;'>“a model for enabling ubiquitous, convenient, on-demand network access to a shared 
                            pool of configurable computing resources (e.g., networks, servers, storage, applications, and services) that 
                            can be rapidly provisioned and released with minimal management effort or service provider interaction.”</p>
                        <h4>There are five Essential Characteristics:</h4>
                        <ul><li>On-Demand Self Service: A consumer can unilaterally provision computing capabilities , such as server time 
                                and network storage, as needed automatically without requiring human interaction with each service provider;</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-4">
                        <p>
                        <ul>
                            <li>Broad Network Access: Capabilities are available over the network and accessed through standard mechanisms that promote 
                                use by heterogeneous thin or thick client platforms (e.g., mobile phones, tablets, laptops, and workstations); </li>
                            <li>Resource Pooling: The provider’s computing resources are pooled to serve multiple consumers using a multi-tenant model, 
                                with different physical and virtual resources dynamically assigned and reassigned according to consumer demand. 
                                There is a sense of location independence in that the customer generally has no control or knowledge over the exact 
                                location of the provided resources but may be able to specify location at a higher level of abstraction 
                                (e.g., country, state, or datacenter). Examples of resources include storage, processing, memory, and network bandwidth;</li>
                            <li>Rapid elasticity: Capabilities can be elastically provisioned and released, in some cases automatically, to scale 
                                rapidly outward and inward commensurate with demand. To the consumer, the capabilities available for provisioning 
                                often appear to be unlimited and can be appropriated in any quantity at any time; and</li>
                            <li>Measured service: Cloud systems automatically control and optimize resource use by leveraging a metering capability 
                                at some level of abstraction appropriate to the type of service (e.g., storage, processing, bandwidth, and active 
                                user accounts). Resource usage can be monitored, controlled, and reported, providing transparency for both the provider 
                                and consumer of the utilized service.</li>
                        </ul>
                        </p>
                        <p>
                            Because of the importance of Cloud Computing NIST have also developed a “reference architecture” based on the NIST definition 
                            that can be used to help develop and build a Cloud Computing capability.
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-5">
                        <span class="bigimagespan">
                            <img class='big-image' id='nistmodel' src='img/public/nistcloud.png'/>
                        </span>
                        <br/>
                        <div class='sources'>Sources: <br/>
                            <a href='http://csrc.nist.gov/publications/nistpubs/800-145/SP800-145.pdf'>
                                NIST Definition of Cloud; and
                            </a><br/>
                            <a href='http://www.nist.gov/customcf/get_pdf.cfm?pub_id=909505'>
                                NIST Cloud Computing Reference Architecture.</a>
                        </div>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-6">
                        <h3>Cloud Service Models: IaaS, PaaS & SaaS</h3>
                        <p>
                            The Cloud Computing market is estimated to be worth about $35 Billion in 2013 which is substantial for any emergent 
                            technology - not least for a market which only came into being in the past four years. As identified at the outset 
                            the objective of this portion of this website is to provide material and meaningful assistance those wishing to 
                            become Managed or Cloud Service Providers (CSPs). There is one final component of background information to relay 
                            before diving deeper into the MSP/CSP pages - that of Cloud type or as NIST define it "Service Model". This Service 
                            Model denotes the type of Cloud vendor (you could be many) you wish to be and provides a meaningful reference point 
                            for prospective customers in the market to understand what it is that you provide. In order to understand the 
                            Service Model we need to abstract the actors involved when consuming Cloud Computing:
                        </p>
                        <table border='0'>
                            <tr>
                                <td>
                                    <img class='very-small-img' src='img/public/servers.png'/>
                                </td>
                                <td>
                                    This icon is used to denote the physical server hardware used to process Cloud Computing workloads.
                                </td>
                                <td></td>
                                <td>
                                    <img class='very-small-img' src='img/public/disks.png'/>
                                </td>
                                <td>
                                    This icon denotes the physical storage hardware used to process Cloud Computing workloads.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class='very-small-img' src='img/public/applications.png'/>
                                </td>
                                <td>
                                    This icon denotes application software either common off-the-shelf (COTS) or bespoke packages deployed within the Cloud Computing service.
                                </td>
                                <td></td>
                                <td>
                                    <img class='very-small-img' src='img/public/processes.png'/>
                                </td>
                                <td>
                                    This icon is used to denote the processes, procedures and resources employed to measure and report on the Cloud Computing workloads.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-7">
                        <table border="0">
                            <tr>
                                <td>
                                    <img class='very-small-img' src='img/public/processuse.png'/>
                                </td>
                                <td>
                                    This icon denotes the processes, procedures and resources employed to manage (provision, orchestrate, & configure) the Cloud Computing workloads.
                                </td>
                                <td>
                                    <img class='very-small-img' src='img/public/endusers.png'/>
                                </td>
                                <td>
                                    This icon denotes the Cloud service end users or Cloud Consumers.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class='very-small-img' src='img/public/programmers.png'/>
                                </td>
                                <td>
                                    This icon is used to denote the development resources used to programme applications delivered as part of the Cloud Computing service.
                                </td>
                                <td>
                                    <img class='very-small-img' src='img/public/encasement.png'/>
                                </td>
                                <td>
                                    This icon is used to encase a Test or User Acceptance Test process employed within the Cloud Computing service.
                                </td>
                            </tr>
                        </table>
                        <h3>Service Model #1: Infrastructure-as-a-Service(IaaS)</h3>
                        <p>
                        <table border="0">
                            <tr>
                                <td>
                                    <img class='medium-img' src='img/public/servicemodel1.png'/>
                                </td>
                                <td>
                                    The provision of processing, storage, networks, and 
                                    other computing resources where the consumer is able to deploy and run arbitrary 
                                    software, which can include operating systems and applications. The consumer does not manage 
                                    or control the underlying infrastructure but do control operating systems, 
                                    storage, and deployed applications; and possibly limited control of select networking 
                                    components (e.g. firewalls). Often marketed or advertised as Storage-as-a-Service, 
                                    Compute-as-a-Service, etc.
                                    <br/>
                                    Providers:<br/>
                                    <ul>
                                        <li>Amazon Web Services</li>
                                        <li>IBM SoftLayer</li>
                                        <li>Google Compute Cloud</li>
                                        <li>Joyent</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-8">
                        <h3>Service Model #2: Platform-as-a-Service(PaaS)</h3>
                        <p>
                        <table border="0">
                            <tr>
                                <td>
                                    <img class='medium-img' src='img/public/servicemodel2.png'/>
                                </td>
                                <td>
                                    The capability provided to the consumer is to deploy onto cloud infrastructure 
                                    consumer-created or acquired applications created using programming languages, 
                                    libraries, services and tools supported by the provider. The consumer does not 
                                    manage or control the underlying Cloud infrastructure including network, 
                                    servers, operating systems or storage, but has control over the deployed 
                                    applications and possibly configuration settings for the application hosting 
                                    environment.
                                    <br/>
                                    Providers:<br/>
                                    <ul>
                                        <li>Amazon Elastic Beanstalk</li>
                                        <li>IBM BlueMix</li>
                                        <li>Google App Engine</li>
                                        <li>Microsoft Azure</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="cloud-9">
                        <h3>Service Model #3: Software-as-a-Service(SaaS)</h3>
                        <p>
                        <table border="0">
                            <tr>
                                <td>
                                    <img class='medium-img' src='img/public/servicemodel3.png'/>
                                </td>
                                <td>
                                    The capability provided to the consumer is to use the provider’s applications 
                                    running on a cloud infrastructure. The applications are accessible from various 
                                    client devices through either a thin client interface, such as a web browser 
                                    (e.g.,web-based email) or a program interface. The consumer does not manage or 
                                    control the underlying cloud infrastructure including network, servers, operating 
                                    systems, storage, or even individual application capabilities, with the possible 
                                    exception of limited user-specific application configuration settings.
                                    <br/>
                                    Providers:<br/>
                                    <ul>
                                        <li>SalesForce.com</li>
                                        <li>Netsuite</li>
                                        <li>ServiceNow</li>
                                        <li>MediData</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        </p>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-3">
                    <div class="sidearrow"><img class='leftsidearrow' src="img/public/goleftarrow.png" id='mmogleft' reveal='mmog-0' thiscontainer='mmog-1'/></div>
                    <div class="sidearrow"><img class='rightsidearrow' src="img/public/gorightarrow.png" id='mmogright' reveal='mmog-1' thiscontainer='mmog-0'/></div>
                    <div class='base_full_viewer_frame_inner' id="mmog-0">

                        <h3>Introduction to Gaming / MMOG</h3>
                        <p>Ever since I first waited the nearly twenty minutes for the tape load to finish and the opening screen 
                            to be revealed of "Elite" (Acornsoft 1984) on my Acorn Electron I have been hooked to strategy style 
                            games. The journey to today’s MMOGs, X-Box, PlayStation, Wii, online and, latterly, mobile games has 
                            been an extraordinary story of market growth.</p>
                        <p>
                            Even back then video gaming communities were mushrooming up all over Dublin with these new exciting 
                            monster machines arriving, first into corner shops and then as dedicated video arcades. I remember 
                            fondly those halcyon carefree afternoons spent at Dave Flanagan’s arcade in Malahide. Today’s video 
                            games market has surpassed, by some order of magnitude, what I then considered to be the potential 
                            for these “time wasters” (as my Dad called them!). The global video games market is now estimated 
                            to be worth an incredible $70.4Bn.
                        </p>

                        <img id='mmogimg' src='img/public/mmogmarket.png'/>


                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-1">
                        <p>This market has expanded rapidly not least because of the ubiquity of SmartPhone & Tablet devices 
                            and their ability to deliver gaming content. It is estimated that this mobile revolution has 
                            grown to represent just over 15% of all gaming with PC’s, Consoles and Online being 10.5%, 
                            39.5% and 35% respectively.
                        </p>

                        <h4>Sources & Further Reading</h4>
                        <p>Other links to excellent introductions to gaming are:</p>
                        <ul class='listoflinks'>
                            <li>
                                <a href='http://www.pwc.com/gx/en/global-entertainment-media-outlook/segment-insights/video-games.jhtml'>
                                    http://www.pwc.com/gx/en/global-entertainment-media-outlook/segment-insights/video-games.jhtml
                                </a>
                            </li>
                            <li>
                                <a href='http://www.gamasutra.com/view/news/193625/'>
                                    http://www.gamasutra.com/view/news/193625/ 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.xbox.com/en-gb/#fbid=YrV9MANM07N'>
                                    http://www.xbox.com/en-gb/#fbid=YrV9MANM07N
                                </a>
                            </li>
                            <li>
                                <a href='http://uk.playstation.com/'>
                                    http://uk.playstation.com/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.nintendo.co.uk/'>
                                    http://www.nintendo.co.uk/
                                </a>
                            </li>
                            <li>
                                <a href='http://en.gameforge.com/home/index '>
                                    http://en.gameforge.com/home/index 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.nexon.net/'>
                                    http://www.nexon.net/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.perfectworld.com/'>
                                    http://www.perfectworld.com/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.ga-me.com/'>
                                    http://www.ga-me.com/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.disney.co.uk/'>
                                    http://www.disney.co.uk/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.cjii.co.id/Company/Introduce.aspx'>
                                    http://www.cjii.co.id/Company/Introduce.aspx
                                </a>
                            </li>
                            <li>
                                <a href='http://www.hanbitsoft.com/Home/Home.aspx'>
                                    http://www.hanbitsoft.com/Home/Home.aspx
                                </a>
                            </li>
                            <li>
                                <a href='http://bigpoint.net/'>
                                    http://bigpoint.net/
                                </a>
                            </li>
                            <li>
                                <a href='http://zynga.com/'>
                                    http://zynga.com/
                                </a>
                            </li>
                            <li>
                                <a href='http://www.ea.com/uk '>
                                    http://www.ea.com/uk 
                                </a>
                            </li>
                            <li>Newman, James ‘Videogames’ (Routledge, 2013)</li>
                            <li>Wolf, Mark ‘The Video Game Explosion’ (Greenwood Press, 2008)</li>
                            <li>Egenfeldt-Nielsen, S, Smith, J & Tosca, S ‘Understanding Video Games’ (Routledge, 2013)</li>
                            <li>National Research Council ‘The Rise of Games and High=Performance Computing for Modeling and Simulation’ (National Academies Press, 2010)</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-2">
                        <h3>Why MMOGs?</h3>
                        <p>
                            It is clear that the video gaming industry is now a massive giant of economic progress and that 
                            games are ever increasing in their scale, complexity and beauty. Growing up in the depressed 
                            economic environment of the 1970s meant that there was little to do but watch TV, listen to 
                            the radio, and hang around on street corners causing consternation to those unfortunate homeowners 
                            (apologies!). The start of the 1980s saw inklings of light come through and by 1982 the BBC Micro 
                            had taken me and many of my friends by storm. Hot on its heel were the ZX Spectrum which provided 
                            colour graphics and Manic Miner. My real passion, though, remained Elite and in some ways Elite 
                            isn’t a bad place to begin with MMOGs. 
                        </p>
                        <p>
                            There are inordinate quantities of great introductions to what an MMOG is, how it evolved from 
                            the earliest single-player games, through Multiuser Domains (MUDs), into Multiplayer Online Games 
                            (MOGs) and then into the Massively Multiplayer Online Game (MMOG). For more on the specifics of 
                            its evolution:
                        </p>
                        <ul class='listoflinks'>
                            <li>
                                <a href='http://massively.joystiq.com/2011/08/10/namaste-entertainment-charts-the-history-of-mmos/'>
                                    http://massively.joystiq.com/2011/08/10/namaste-entertainment-charts-the-history-of-mmos/ 
                                </a>
                            </li>
                            <li>
                                <a href='http://venturebeat.com/2013/01/09/get-with-the-times-man/'>
                                    http://venturebeat.com/2013/01/09/get-with-the-times-man/ 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.newzoo.com/infographics/the-global-mmo-market-sizing-and-seizing-opportunities/'>
                                    http://www.newzoo.com/infographics/the-global-mmo-market-sizing-and-seizing-opportunities/ 
                                </a>
                            </li>
                            <li>
                                <a href='http://en.wikipedia.org/wiki/MMOG'>
                                    http://en.wikipedia.org/wiki/MMOG
                                </a>
                            </li>
                            <li>Rice, Robert ‘MMO Evolution’ (lulu.com, 2006) </li>
                            <li>Abraham, Ajith (Editor) ‘Computational Social Networks – Mining and Visualisation’ (Springer, 2012) </li>
                            <li>Nelson, Brian & Erlandson, Benjamin ‘Design for Learning in Virtual Worlds’ (Routledge, 2012) </li>
                            <li>Edery, David & Mollick, Ethan ‘Changing the Game’ (FT Press, 2008)</li>
                            <li>Chatfield, Tom ‘Fun Inc: Why Games are the 21st Century’s most Serious Business’ (Virgin Books, 2010)</li>
                            <li>El-Nasr M, Drachen A, & Canossa A ‘Game Analytics – Maximizing the Value of Player Data’ (Spinger, 2013)</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-3">
                        <p>As mentioned earlier Elite is probably not a bad place to start. This game had me trapped straight from the 
                            beginning. The notion that you could trade across the galaxy in legal or illegal goods, that you could have 
                            skirmishes with pirate space captains and you could work your way up to Elite status. You can still play 
                            this game today on Windows™. (http://www.classic-retro-games.com/Elite-The-new-kind_180.html )
                        </p>
                        <p>
                            The point is that from this acorn (forgive the pun) came an oak and that while, from a programming perspective 
                            Elite was a mere minnow, the thought process, the storyline ambition, the conscious construction of an altered 
                            galaxy sized reality was (whether realised at the time) to be a step of enormous significance psychologically, 
                            sociologically and anthropologically. Pandora’s box was irreversibly opened!
                        </p>
                        <h3>The Emergence of MMOGs</h3>
                        <p>
                            So aside from the pure pleasure of playing these amazing games, the interest in MMOGs stems from its ceaseless, 
                            fundamental and obligatory need to be bleeding edge across all of the following (note: non-exhaustive list) 
                            domains of human knowledge:
                        </p>
                        <ul>
                            <li>
                                <strong>Art & Graphic Design </strong>- without astounding graphics for the infinity of input variables 
                                such as: characters, worlds, ships, cars, weapons, space craft, etc. players of the game would become 
                                bored and migrate to another provider or platform;
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-4">
                        <ul>
                            <li>
                                <strong>Economics </strong>- of course in a virtual economy the “central bank” can keep printing money 
                                and adding infinite resources but this can impact the reality of the situation and often removes the 
                                underlying Maslovian impetuses and behavioural motivations that people need to have to remain interested 
                                in playing, learning, and building. Managing a virtual-economy exhibits the same laws of micro and 
                                macro-economics as that of the real world. But more than this the economics involved in MMOGs is now 
                                pushing the boundaries of our knowledge of this subject;
                            </li>
                            <li>
                                <strong>Psychology & Behavioural Science </strong>- an MMOG is designed specifically to enable collaboration, 
                                alliances, and conflicts. But these interactions are by nature random and uncontrolled and once the game is 
                                “live” they can take unexpected turns. From a design perspective goals challenges and rewards can be baked-in 
                                but the law of unforeseen consequences dictates that the behaviours of those playing will become grouped into 
                                psychologically aligned patterns based on rational and irrational human (the player) motivations. This leads 
                                the designers to a need for understanding the behavioural psychology of swarms, crowds, leadership, 
                                conditioning, reinforcement, etc;
                            </li>
                            <li>
                                <strong>Mathematics </strong>- almost the founding basis for MMOG designers and writers. Early on in the 
                                development from single-player to Multiuser Domains (MUDs) the need arose to understand the dynamics of 
                                player interaction in a finite space. Germinating from these early algorithms an entire universe of 
                                mathematic understanding was needed to feed the appetites of players. Game theory in particular is 
                                necessary to try to statistically estimate the evolution in-game of players, NPCs, etc;
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-5">
                        <ul>
                            <li>
                                <strong>Literature </strong>- MMOGs require a really well evolved and cohesive storyline. The base premise 
                                for the world, domain, universe, etc. that the designer creates must hold water. NPC identities, guilds, 
                                alliances, fiefdoms, etc. must all be thought through in minute detail in conjunction with their 
                                characteristics, such as, morality, ethics, and politics so that the underlying construct exhibits a 
                                sense of realism;
                            </li>
                            <li>
                                <strong>Education </strong>- in some part people play games to learn, to evolve, and to grow. This could 
                                be as rudimentary as the motivation of “one-upmanship” but game designers need to carefully think through 
                                the ultimate goals of any MMOG far beyond simplistic notions – for instance, even the most obvious linear 
                                construct of going from Level 1 to Level 100 needs careful evaluation of the learning curve, the ability 
                                to fall backwards, the ability to skip ahead, the expected time taken at each increment and the embedding 
                                of a “Goldilocks” approach to each successive step. Games today are far from this embryonic example with 
                                (n) scale non-linearity’s needing very deep modelling as part of the design phase;
                            </li>
                            <li>
                                <strong>Sociology </strong>- we all understand that societies develop over time but the question is how 
                                do they develop, how are we so different in 2013 from when I grew up in the 1970s? An inordinate amount 
                                of factors impact our daily lives without us even noticing. Those factors need to be mirrored by MMOG 
                                designers within the game. Thoughts and (ultimately) programming needs to attend to incremental changes 
                                that propel forward (or regress) the society or societies in the game. Cultural factors, familial units, 
                                political faction development, gender considerations, generational & economic divides, religious 
                                implications, and many more must be considered and planned;
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-6">
                        <ul>
                            <li>
                                <strong>Anthropology </strong>- especially sociocultural anthropology provides input for game designers 
                                into the logic of societal developments through ethnography. Game designers can learn from the development 
                                cycles of human history and to try to extrapolate from that the expected progression of societies in their 
                                games. This is especially important when designing large scale computer generated societies which will 
                                interact with players either peripherally or directly. These societies will need to evolve in the game 
                                as much as the human players and the impact and type of interactions across thousands even millions of 
                                players needs to be understood;
                            </li>
                            <li>
                                <strong>Political Science </strong>- closely linked to many of the above areas. Depending on the type 
                                or nature of the MMOG there is a critical link to develop political ideologies for groups within the 
                                game. An obvious example is a war situation where your tribe, clan, horde, guild, nation or country 
                                is from the outset pitted against another. The automatic political allegiance story needs to make 
                                clear as to where players will fit within the political structure of the war effort, their <i>locus 
                                    standi</i> if you like within their community and they can change this, how the war will progress, 
                                whether there are Machiavellian factions within your own side etc. This can build intrigue and 
                                interesting alliances that coalesce to make the game more enjoyable but thought needs to be 
                                given during design to the political processes, its systems, and its ideology;
                            </li>
                            <li>
                                <strong>Monetization & Commercial Modeling </strong>- in the early days of Elite and the like the 
                                monetization model for designers was prima facie with a single upfront payment delivering access 
                                to the game software. Over time and with the rise of the Internet online games monetized using a 
                                simple subscription mechanism – denoted Pay-to-Play (P2P). With the advent of SmartPhones, Tablets 
                                and casual games this P2P model metamorphosed into a Free-to-Play (F2P) model with new monetization 
                                apparatus being engaging to elicit revenues for the game designers and publishers;
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-7">
                        <ul>
                            <li>
                                <strong>Law & Intellectual Property Rights </strong>- finally for this diatribe is the critical 
                                area of legal rights, rights management, ownership, patents and copyrights. Collectively the area 
                                of law most affecting MMOG is that of Intellectual Property Rights (IPR). MMOGs on many fronts are 
                                forcing legislatures to break new ground. In the early stages the distribution of games clearly fit 
                                within the extant strictures of common practice International Trade. However with globalisation and 
                                the Internet new contrivances were unveiled to keep pace of cross-border players. A simple example 
                                would be the tax law implications for casino style gaming where a foreign national plays and wins 
                                – is there tax? Other significant developments are in the area of virtual building profits 
                                (whether character enhancement or virtual environment enhancements) where a player builds 
                                through many hours of play a set of features or capabilities and sells them on the secondary 
                                market for “real” money – is this taxable?
                            </li>
                        </ul>
                        <p>And of course the Information Technologies knowledge to realise an outcome product:</p>
                        <ul>
                            <li>
                                Computer Graphics
                            </li>
                            <li>
                                Engine Architecture & Parallelism
                            </li>
                            <li>
                                Networking & Communications
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="mmog-8">
                        <h3>Sources & Further Reading</h3>
                        <ul>
                            <li>
                                <a href='http://photo.mmosite.com/arts/'>
                                    http://photo.mmosite.com/arts/ 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.raphkoster.com/gaming/economy.shtml'>
                                    http://www.raphkoster.com/gaming/economy.shtml  
                                </a>
                            </li>
                            <li>
                                <a href='http://www.wildstar-online.com/en/news/wildstars_economic_game.php'>
                                    http://www.wildstar-online.com/en/news/wildstars_economic_game.php 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.nickyee.com/daedalus/archives/02_04/Yee_Book_Chapter.pdf'>
                                    http://www.nickyee.com/daedalus/archives/02_04/Yee_Book_Chapter.pdf 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.asanet.org/introtosociology/documents/Field%20of%20sociology033108.htm'>
                                    http://www.asanet.org/introtosociology/documents/Field%20of%20sociology033108.htm 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.brianhoey.com/General%20Site/general_defn-ethnography.htm'>
                                    http://www.brianhoey.com/General%20Site/general_defn-ethnography.htm 
                                </a>
                            </li>
                            <li>
                                <a href='http://www.marketwatch.com/story/play-online-games-win-a-tax-bill-2011-02-25'>
                                    http://www.marketwatch.com/story/play-online-games-win-a-tax-bill-2011-02-25 
                                </a>
                            </li>
                            <li>
                                <a href='http://money.howstuffworks.com/personal-finance/personal-income-taxes/virtual-tax.htm'>
                                    http://money.howstuffworks.com/personal-finance/personal-income-taxes/virtual-tax.htm
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-4">
                    <div class="sidearrow"><img class='leftsidearrow' src="img/public/goleftarrow.png" id='gamificationleft' reveal='gamification-0' thiscontainer='gamification-1'/></div>
                    <div class="sidearrow"><img class='rightsidearrow' src="img/public/gorightarrow.png" id='gamificationright' reveal='gamification-1' thiscontainer='gamification-0'/></div>
                    <div class='base_full_viewer_frame_inner' id="gamification-0">
                        <h3>Introduction to Gamification</h3>
                        <p>
                            By our very nature human beings engage in games of all types. We like games. We may not all like the 
                            same type or style of game but we as a species like games. Early archaeology has unearthed rudimentary 
                            dice as old as 3000BC in the Americas and elegantly carved board game pieces in Turkey from 2900BC, so 
                            clearly this penchant for games was alive and well many moons ago. More recently games were used by 
                            military tacticians to develop the skills of officer recruits from 1780 onward with Helwig then Von 
                            Reisswitz and the introduction of Kreigsspiel in the 19th century. Stepping forward in time, by 
                            1956 businesses and the US Airforce utilised programmes such as Top Management Decision Simulation 
                            and the US military started to use a modified version of the computer game Doom in 1998. To this 
                            day both are stalwart supporters of the efficacy of computer games and gaming as part of military 
                            training. In education by the 1960s the concept of Computer Assisted Instruction (CAI) was coined 
                            and this drill and practice approach matured over subsequent decades to become adventure formatted 
                            games with titles from Lucas Learning and The Learning Company. Research and revenues point to a 
                            decline in the Edutainment industry during the 1990s, perhaps in part due to the word “game” having 
                            and continuing to have a negative connotation. Nevertheless this is now to a degree rebounding, not 
                            least influenced by the ubiquity of handheld devices and is likely to see significant growth. An 
                            introduction to the more recent inculcations of gaming and in particular, from an IT perspective, 
                            the rise of the Massively Multiplayer Online Game (MMOG) is provided on the MMOG pages of this website. 
                        </p>
                        <h4>Sources & Further Reading</h4>
                        Other links to excellent introductions to gamification, gaming and edutainment are:
                        <ul class='listoflinks'>
                            <li>
                                <a href='http://www.news.nationalgeographic.com/news/2010/12/101210-dice-gaming-gambling-native-american-indian-casinos-science/'>
                                    http://www.news.nationalgeographic.com/news/2010/12/101210-dice-gaming-gambling-native-american-indian-casinos-science/   
                                </a>
                            </li>
                            <li>
                                <a href='http://www.hyperallergic.com/80050/archeologists-uncover-5000-year-old-game-board-pieces'>
                                    http://www.hyperallergic.com/80050/archeologists-uncover-5000-year-old-game-board-pieces 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-1">
                        <ul class='listoflinks'>
                            <li>
                                <a href='http://www.eduquery.com/jaet/JAET4-1_Dondlinger.pdf '>
                                    http://www.eduquery.com/jaet/JAET4-1_Dondlinger.pdf 
                                </a>
                            </li>
                            <li>
                                <a href='http://weisenfeldj.wordpress.com/2011/07/28/marzano-r-j-2010-developing-expert-teachers-in-r-j-marzano-ed-excellence-in-teaching-10th-ed-bloomington-in-solution-tree-press/ '>
                                    http://weisenfeldj.wordpress.com/2011/07/28/marzano-r-j-2010-developing-expert-teachers-in-r-j-marzano-ed-excellence-in-teaching-10th-ed-bloomington-in-solution-tree-press/  
                                </a>
                            </li>
                            <li>
                                <a href='http://talpalink.co.uk/resources/games+technologies+for+learning$2C+more+than+just+toys.pdf'>
                                    http://talpalink.co.uk/resources/games+technologies+for+learning$2C+more+than+just+toys.pdf
                                </a>
                            </li>
                            <li>
                                <a href='http://hypertext.rmit.edu.au/dac/papers/McGonigal.pdf'>
                                    http://hypertext.rmit.edu.au/dac/papers/McGonigal.pdf
                                </a>
                            </li>
                            <li>Marczewski, Andrzej ‘Gamification: A Simple Introduction’ (eBook available Amazon, iTunes 2013)</li>
                            <li>Egenfeldt-Nielson, Simon ‘Beyond Edutainment: Exploring the Educational Potential of Computer Games’ (lulu.com, 2011)</li>
                        </ul>
                        <h3>So What is Gamification?</h3>
                        <p>
                            The best evidence suggests that the term “gamification” joined our vernacular some time during 2004 but did not 
                            become popular as a word to describe the underlying concept until 2010. Clearly this section of the website is 
                            aligned to the study and investigation of “gamification” and if you’ve navigated to this area then there is a 
                            high probability that you are also interested in this concept. As one of the four areas of convergence it is 
                            contended that this concept is, and will continue, to drive a revolutionary shift in perception for businesspersons, 
                            politicians, educators, scholars, researchers, scientists and just about everyone over the coming decade. </p>
                        <p>
                            In short, it is about harnessing the hugely powerful human emotions and psychological phenomena evidenced in 
                            game playing to drive increased engagement, performance and productivity. In length, it is the application of 
                            game design, game methodologies, game approaches, and game mechanics to non-game situations for a multiplicity of 
                            purposes of, including but not limited to:
                        </p>
                        <ul>
                            <li>Customer engagement, development and retention; </li>
                            <li>Employee & student behaviour modification, development and productivity/performance improvement; </li>
                            <li>Brand building, enhancement, recognition, consistency and loyalty;  </li>
                            <li>Channel & Partner commitment, incentivising and experience enrichment;</li>
                            <li>Government publicity, outreach and population re-enfranchisement.</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-2">
                        <p>
                            While the end goals for those who integrate gamification into their technological and operational processes 
                            differ, for instance in:
                        <ul>
                            <li>business terms, the underlying goal is often driven by the need to build longer-term lasting relationships, 
                                to achieve ‘fanversion’ (the conversion of customers into fans and evangelists) thereby achieving higher 
                                revenues through a maximised Lifetime Customer Value (LCV); and</li>
                            <li>government terms, the goal at a local level is often to build a deeper sense of community, to unify disparate 
                                groups through encouraging the more social aspects of technological interaction with the offices of county, 
                                state or central government and through this to address significant socially divisive issues, such as 
                                democratic deficit and population disillusion</li>
                            <li></li>
                        </ul>
                        <p>the mechanisms for realisation remain ostensibly the same. Clearly the breadth of audience for how and where 
                            gamification can be used is enormous. The core point though is that embarking on a gamification initiative 
                            means carefully determining the specific “success measure” and understanding the particular “use cases” 
                            which are applicable. From the evidence to date, nothing is surer than if used in the wrong context gamification 
                            is far from a panacea and may have unfortunate negative consequences.
                        </p>
                        <h3>We Begin with Understanding Motivation</h3>
                        <p>
                            It was identified earlier that gamification is about harnessing the hugely powerful human emotions and 
                            psychological phenomena evidenced in game playing to drive increased engagement, performance and productivity. 
                            At the outset of a gamification programme the question arises as to what are these powerful emotions and why 
                            are they significant? This point goes to the heart of the matter and underpins every aspect of the design effort. 
                            The greater the emotional involvement elicited in the player the greater the enjoyment factor of the player and, 
                            in theory, the greater the outcome for the programme.
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-3">
                        <p>
                            This area of research is founded in psychology and in particular in our (as yet nascent) understanding of 
                            motivation. There have been many research projects in academia to investigate the underlying motivators of 
                            behaviour, whether they are by nature or by nurture, with often surprising and unexpected results:
                        </p>
                        <ul>
                            <li>starting with the famous William Blake and his 1890 instinct theory which identified a number of 
                                physical and mental instincts which by nature are embedded within us from nature;</li>
                            <li>then to the drive reduction theory of motivation which sought to link biological ‘needs’ to behaviour instigators;</li>
                            <li>the studies of Kurt Lewin on nature vs. nurture and his famed equation of B=f(P,E), behaviour is a function of 
                                the person and their environment;</li>
                            <li>the research of B F Skinner who followed on from the work of Edward Thorndike and incentive theory which 
                                proposes to explain motivation through the prism of promised outcomes – his famous experiments (1948) 
                                with operant conditioning highlighted ‘proof’ of a kind for some of the incentive based behaviours</li>
                            <li>in parallel though Skinner’s experiments though were eclipsed (certainly in psychological circles 
                                notoriety, arguably with hindsight in infamy) by those of John Broadus Watson whose famous conditioning of 
                                a 9-month old child also yielded behavioural modifications – in this case the inducement of a rat phobia;</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-4">
                        <table border='0'>
                            <tr>
                                <td>
                                    <ul>
                                        <li>to the almost ubiquitously famous (particularly in business schools) Maslow’s Hierarchy of Needs theory, 
                                            named after its creator Abraham Maslow and presented in a seminal paper in 1943 entitled “A Theory of 
                                            Human Motivation” and expressed again including curiosity in his 1954 book “Motivation and Personality”;</li>
                                        <li>there are also the lesser renowned experiments of Harry Harlow in the 1940s whose rhesus monkeys appear 
                                            to have displayed a ‘curiosity’ motivator rather than any underlying biological or instinctual motivator 
                                            (i.e. food, sex, etc.) delivered a new term to behavioural psychology – that of intrinsic motivation;</li>
                                        <li>the interesting behaviour experiments of Stanley Milgram whose experiments on obedience with (pretended) 
                                            electric shocks delivered under instruction by participating students to those failing to answer queries 
                                            correctly resulted in a 65% acceptance rate of delivering a notional fatal shock, highlighted to Milgram 
                                            that it is less the kind of person you are as it is the situation you find yourself in that drives a 
                                            certain behaviour;</li>
                                    </ul>
                                </td>
                                <td>
                                    <img class='maslow' src="img/public/maslow.png" alt=""/>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-5">
                        <ul>
                            <li>the studies of Victor Vroom and the Expectancy Theory of motivation which proposes that an individual will decide 
                                to behave in a particular way founded on a preference of one behaviour over another on the basis of an expectation 
                                of greater gain in the outcome. This is summarised as M=ExIxV (motivation = expectancy x instrumentality x valence);</li>
                            <li>to the studies of Edward Deci and Richard Ryan in 1969 whose surprising findings revealed that in certain 
                                circumstances extrinsic motivators or outside influencers, for instance monetary rewards, could have negative 
                                consequences for motivation and that humans also had an “inherent tendency to seek out novelty and challenges”. 
                                Their Self-Determination Theory provides a basis of motivation formulated on autonomy, relatedness and competence;</li>
                            <li>the chilling, arguably extreme outcomes, from the famous experiments of Philip Zimbardo at Stanford University 
                                which laid bare the some astounding insights into both the fragility and nastiness of human behaviours under 
                                certain circumstances – often called the “Lucifer Effect”; and</li>
                            <li>finally to the work of B F Fogg on creating habits, automating behaviour change and the Motivation Wave 
                                which provides a framework approach to understand and influence online behaviours.</li>
                        </ul>
                        <p>
                            This learning (and much more) over many decades delivers insights in the nature of human motivation and its linkage to 
                            behaviour. Fostering as much of a grounding as possible in these psychological sciences is critical for both game and 
                            gamification designers. At a minimum, designers should be well versed in:
                        </p>
                        <ul>
                            <li>
                                <strong>Intrinsic motivation </strong>– refers to a class of motivators that are exhibited through native interest, curiosity 
                                or enjoyment of the (in our case) game itself. This type of motivation is extant within the player and does not 
                                require recourse to external influences It can be considered a natural motivational tendency within players who 
                                will likely engage in gameplay willingly either for its own sake, for learning reasons, for curiosity reasons or 
                                for reasons which the player perceives as a benefit to them;</li>
                        </ul>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="gamification-6">
                        <ul>
                            <li>
                                <strong>Extrinsic motivation</strong> - refers to the playing of a game in order to achieve or attain an external outcome.  
                                This motivation class is externally influenced by money, rewards, badges, grade enhancement, punishments, 
                                competition, etc. and can occur in conjunction with intrinsic motivation.
                            </li>
                        </ul>
                        For much more on developing an understanding Gamification download the free eBook <a class='gotoDownloads' href='#'>here</a>. This goes through:
                        <ul>
                            <li>
                                Bartles Player Types;
                            </li>
                            <li>
                                The Motivation Wave;
                            </li>
                            <li>
                                The Concept of Flow;
                            </li>
                            <li>
                                Structural & Content Gamification; and
                            </li>
                            <li>
                                Game Analytics;
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-5">
                    <div class="sidearrow"><img class='leftsidearrow' src="img/public/goleftarrow.png" id='bigdataleft' reveal='bigdata-0' thiscontainer='bigdata-1'/></div>
                    <div class="sidearrow"><img class='rightsidearrow' src="img/public/gorightarrow.png" id='bigdataright' reveal='bigdata-1' thiscontainer='bigdata-0'/></div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-0">
                        <h3>Introduction to BigData & Analytics</h3>
                        <p>
                            Where on Earth to begin describing such a topic as BigData? That’s probably one of the biggest 
                            early challenges in starting to trawl this subject. As subjects, even Cloud, MMOG and Gamification 
                            pale into insignificance when addressing the breadth and depth of complexity involved in BigData. 
                            Indeed we touched upon an element of BigData in Gamification (see Long Introduction for more details) 
                            alluding to the fact that until the advent (in many cases the depth of this has yet to be achieved) 
                            of BigData we did not have the ability; in anything more than a rudimentary sense; to understand, 
                            contextualise and predict the behaviours of customers at all. The evolution of computing which was 
                            covered very briefly under the Cloud heading of this website brought with it a new age of innovative 
                            capabilities and efficiencies with first  governments, then companies and latterly individuals 
                            the world over able to harness computer processing to drive better services and be more organised 
                            than ever before. The arrival recently of SmartPhones has now taken the individual element of this 
                            evolution to new heights with the millennial generation expectant of immediacy of knowledge or 
                            facts wherever they are at whatever time. Even as recently as 2010, some commentators even mused 
                            that we were living through a stagnant boring age. Now though, any thoughts such as these are all 
                            about to irrevocably and stupendously change. We are truly witnessing “The Beginning of Infinity”.
                        </p>
                        <h4>So What is BigData?</h4>
                        <p>
                            At the highest level of aggregation BigData can be viewed as comprising of five specific functions 
                            each of which requires careful design across people, process and technology. In the simplest terms 
                            those functions can be viewed as being:
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-1">
                        <img class='bigdataPic' src="img/public/bigdatadomains.png" alt=""/>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-2">
                        <p>
                            Each of the five functions is described in more detail below but it is worth pointing out at this 
                            juncture that the size of the pie above is indicative of the size of the challenge posed by that 
                            function for the implementing organisation.
                        </p>
                        <p>
                            <strong>Capture</strong> – the switch from analogue to digital data which began during the 1990s provided the first 
                            portents for the today’s tsunami of data growth. From 1996 to 2007 digital storage in enterprises 
                            went from 0.3 Exabytes to 276 Exabytes. This foundation was then further fuelled by the growth in 
                            mobile devices, laptops, sensors & actuators, Machine-to-Machine (M2M), the availability of cheap 
                            storage disks, and latterly the promiscuity of data within social media resulting in an estimated 
                            total data storage need of approximately 35 Zettabytes by 2020. To further compound the difficulties 
                            of managing this level of data, the vast majority of this data (~85%) is unstructured data such as 
                            photographs, videos, tweets, posts, blogs, logs, email and webpages. Even conceptualising this growth 
                            is difficult, by way of tangible examples the number of live websites has risen from 1.2 Million to 
                            367 Million between 1996 and 2011, and in the same period the number of mobile phones from 145 Million 
                            to ~6 Billion. The bottom line is that simply capturing a subset of this data is a monumental task for 
                            any company. 
                        </p>
                        <p>
                            <strong>Collate </strong>– of course having the data is one thing, having it in a useful format is quite another. 
                            The second function of the lifecycle is the ordering of this data into some form of computing 
                            ingestible structure. This is the domain (in business intelligence vernacular) of Extract, Transform 
                            & Load (ETL). In the structured data world the problems of duplication, erroneous inputs, duplications, </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-3">
                        <p>
                            and absent cells are well known and to a greater or lesser extent the modern day ETL systems are capable 
                            of handling these issues. But as we have seen the true prize in BigData is handling the immensity of 
                            unstructured data which is now beginning to be addressed through textual analysis techniques, advanced 
                            data cleansing/pre-processing, contextual analysis techniques, and advances in natural language processing. 
                            To make this more real when we are scanning unstructured inputs a common issue is one of acronyms. To a 
                            human the “context” of the document, post, blog or article denotes the probable translation but this is 
                            very much more difficult for a computer, especially at the desired processing speed. 
                        </p>
                        <p>
                            <strong>Collect</strong> – once we have developed and bounded the expansiveness of the capture, and then decided the specifics 
                            of collation, we then have to stage it in vast quantities in some form of computer & human usable containers. 
                            The actual choice of containment will greatly affect the efficacy of the ability to trawl the data. The physical 
                            choices come first to entertain answers to questions such as - How much should be cached? How much on what sort 
                            of disks? Considering an offline archive for later retrieval? Are we using de-duplication and compression? 
                            Beyond the physical layer choices are the decisions concerning which data store and which collated data to 
                            go into which store. The first data store is the continued leverage of the traditional relational database 
                            which remains a key asset in the BigData arsenal today. Developed during the 1970s based on the initial work 
                            of E F Codd, Donald Chamberlain and Raymond Boyce at IBM, the Relational Database Management System (RDBMS) 
                            is a powerful tool for structuring and querying data. Today’s databases are highly optimised systems that can 
                            search and find data using the Structured Query Language (SQL) within the clean carefully crafted, filled, 
                            indexed, non-duplicated table structure of an RDBMS. The second data store is the NoSQL database which emerged 
                            in 1998 but has really gained traction in the last five years. It departs from the relational approach, 
                            does not use tables, and does not use SQL to manipulate data. Instead the approach is to utilise “key, value” 
                            stores, document stores, and graphs. NoSQL is much faster and scales to enormous sizes for the types of 
                            work with unstructured data that today’s BigData demands.
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-4">
                        <p>
                            <strong>Compute</strong> – if you were being pernickety or strict in terms of creating a linkage between the 
                            title ‘BigData’ and its function you could arguably stop now at the three functions described thus far. This 
                            is not the case though, so far we only have data, lots of data but data nonetheless, and data is not in-and-of-itself 
                            very useful to human beings. What we actually want at the end of this is information and better still ‘actionable’ 
                            information. This is where the compute function comes into play. Without getting into a debate on taxonomy from a 
                            business perspective compute is really the juncture of processes, programs, mathematics and visualisation techniques 
                            employed to deliver meaningful insights, models and recommendations. Together these techniques have come to be 
                            called “Business Analytics” but are very closely related and depending on your viewpoint either overlapping or 
                            a subset of “Business Intelligence”.
                        </p>
                        <p>
                            <strong>Change</strong> – at this stage the scene is set for the final function of BigData. We have captured, 
                            collated, collected and computed the data into information. Change is about using that information to take 
                            decisions that result in action. All of the preceding steps are for nought if the information you obtain 
                            cannot be translated into actual transformations within the business to deliver efficiencies, optimisations 
                            and ultimately profits. The goal of the change aspect, and the rational in the graphical view of the five 
                            functions as increasingly large segments of pie, is to deliver programme(s) for organisational change. 
                            This is by far the most difficult of the five functions of BigData to achieve. However, McKinsey estimated 
                            that impact of these changes as capable of delivering value of up to $300 Billion of value in US Healthcare, 
                            €250 Billion in European Public Sector and $600 Billion consumer surplus globally.
                        </p>
                    </div>
                    <div class='base_full_viewer_frame_inner' id="bigdata-5">
                        For much more on developing an understanding BigData download the free eBook <a class='gotoDownloads' href='#'>here</a>. 
                        This goes through in much greater detail:
                        <ul>
                            <li>
                                Business Examples of BigData; and
                            </li>
                            <li>
                                The Size of the Prize;
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-6">
                    <div class='base_full_viewer_frame_inner' id="applications-0">
                        <h3>Applications</h3>
                        <p>
                            This area is dedicated to linking to applications I have written in PHP, JQuery, JavaScript and 
                            HTML/CSS. Please click on the links to gain access to them.
                        </p>
                        <table class='downloadtable'>
                            <tr>
                                <td>
                                    <strong>SaaSifyStore</strong> - A simple storage capability with file encryption
                                </td>
                                <td>
                                    <a href="http://www.saasifyltd.com/saasifystore/">
                                        <button class="downloadbutton">Access SaaSifyStore</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-7">
                    <div class="sidearrow"><img class='leftsidearrow' src="img/public/goleftarrow.png" id='downloadleft' reveal='download-0' thiscontainer='download-1'/></div>
                    <div class="sidearrow"><img class='rightsidearrow' src="img/public/gorightarrow.png" id='downloadright' reveal='download-1' thiscontainer='download-0'/></div>
                    <div class='base_full_viewer_frame_inner' id="download-0">
                        <h3>Documents Downloads</h3>
                        <p>
                            This area is dedicated to making available all of the content on this site and more for 
                            download as PDF documents. Please click on the links to review/save the document from
                            your browser.
                        </p>

                        <table class='downloadtable'>
                            <tr>
                                <td>
                                    <strong>CLOUD</strong> - An Introduction to Cloud
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-10 Cloud Computing Briefing.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>CLOUD</strong> - How Many Data Centers is Optimal?
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-10 How Many Data Centers.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>MMOG</strong> - A Briefing on the market for Massively Multi-user Online Gaming (MMOG)
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-10 MMOG Briefing.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>MMOG</strong> - Monetising Free-to-Play - A Commercial Model
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-10 Monitising F2P - A Stylised Commercial Model View.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Gamification</strong> - 1.0 - A Short Introduction
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-18 Gamification Shorter Briefing.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Gamification</strong> - 2.0 - A Concept for the Future
                                </td>
                                <td>
                                    <a href="docs/public/2013-12-17 Gamification 2.0 - A Concept.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>BigData</strong> - An Introduction
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-24 BigData Briefing.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>CLOUD</strong> - Some Legal Considerations
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-24 Cloud Legal Considerations Cv1.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>CLOUD</strong> - Considerations for negotiating a Cloud Services contract
                                </td>
                                <td>
                                    <a href="docs/public/2013-11-24 Negotiation of Services Agreements Cv1.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>MMOG</strong> - The relevance of Videogames
                                </td>
                                <td>
                                    <a href="docs/public/2013-12-14 Relevance of Videogames - A Briefing Cv10.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Capital the EU and the Global Financial Markets Collapse - Why?
                                </td>
                                <td>
                                    <a href="docs/public/2014-01-01 Capital the EU and the Global Financial Crisis.pdf">
                                        <button class="downloadbutton">View & Download</button>
                                    </a>
                                </td>
                            </tr>  
                        </table>

                    </div>
                    <div class='base_full_viewer_frame_inner' id="download-1">
                        <h3>Download Links</h3>
                        <p>
                            This area is dedicated to making available some useful code content including HTML
                            web site examples, JQuery examples and some PHP.
                        </p>

                        <table class='downloadtable'>
                            <tr>
                                <td>
                                    <strong>JQUERY</strong> - Creating Sliding Menus
                                </td>
                                <td>
                                    <a href="https://github.com/eamonnkillian/JQuery-Menus">
                                        <button class="downloadbutton">Go To Github</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>JQUERY</strong> - A Responsive Web Design
                                </td>
                                <td>
                                    <a href="https://github.com/eamonnkillian/JQuery-RWD">
                                        <button class="downloadbutton">Go To Github</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>JQUERY</strong> - Creating Slide in Frames
                                </td>
                                <td>
                                    <a href="https://github.com/eamonnkillian/Slide-in-Frames">
                                        <button class="downloadbutton">Go To Github</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>WEB-GL</strong> - Learning 3D in a Browser
                                </td>
                                <td>
                                    <a href="https://github.com/eamonnkillian/WebGL-Learning">
                                        <button class="downloadbutton">Go To Github</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>SOFTLAYER</strong> - Building a "White Label" Portal 
                                </td>
                                <td>
                                    <a href="https://github.com/eamonnkillian/SoftLayer-API">
                                        <button class="downloadbutton">Go To Github</button>
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class='base_full_viewer_frame_inner' id="download-2">
                        <h3>Video Links</h3>
                        <p>
                            This area is dedicated to linking in with some useful video content how to get
                            started using a cloud service - in this case IBM's SoftLayer.
                        </p>

                        <table class='downloadtable'>
                            <tr>
                                <td>
                                    <strong>Tutorial One</strong> - Getting Started with SoftLayer
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=IaNrq1stI3g">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Two</strong> - The SoftLayer Customer Portal
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=6FvllPZz8TA">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Three</strong> - Starting Up a Web Server 
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=UmzwXjDAQ7M">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Four</strong> - Revisiting the Simple Web Server 
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=wPyMZE-jOa4">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Five</strong> - Going Deeper - Destroy, Create and Flex Images
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=gddr4pVz0A4">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Six</strong> - Object Storage, CyberDuck & FileZilla
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=m8a_nqR7zJA">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Seven</strong> - VPN SSL Tunneling
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=fDe5_TLPBt0">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Eight</strong> - Access a server using VNC
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=BGp6gggmYbg">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Nine</strong> - Using the CLI
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=WgPYBfDbJS0">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Ten</strong> - Building containers with Docker
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=OFU2LhgQt9o">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Tutorial Eleven</strong> - Using the API's to build a White Label Portal
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v=DEl32GbAQao">
                                        <button class="downloadbutton">Go To YouTube</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="base_full_viewer_frame" id="frame-8">
                    <div class="mainfooter">
                        <div id="FooterLHS">
                            <div id="FooterLHSIcons">
                                <span class="FooterLHSIconsSpan">
                                    <a href="#" onclick="Twitter();" title="Tweet About Me" class="data-icon">&#62217;</a>
                                </span>
                                <span class="FooterLHSIconsSpan">
                                    <a href="#" onclick="Facebook();" title="Facebook Me" class="data-icon">&#62222;</a>
                                </span>
                                <span class="FooterLHSIconsSpan">
                                    <a href="#" onclick="LinkedIn();" title="Link to Me" class="data-icon">&#62232;</a>
                                </span>
                                <span class="FooterLHSIconsSpan">
                                    <a href="#" onclick="Google();" title="Google+ Me" class="data-icon">&#62223;</a>
                                </span>
                            </div>
                        </div>
                        <div id="FooterMID"></div>
                        <div id="FooterRHS">
                            <span id='FooterRHSSpan'>Contact</span>
                            <p>
                                eMail: <a href="#" onClick="parent.location = 'mailto:eamonnkillian@gmail.com?subject=Getting in touch...'"><strong>Eamonn Killian</strong></a><br/>
                                Phone: <strong>+44 7896 103881</strong><br />
                            </p>
                        </div>
                    </div>
                    <script type='text/javascript'>
                        function Twitter()
                        {
                            window.open('https://twitter.com/intent/tweet?text=Check out the new web site ...', 'Twitter', 'height=400,width=650');
                        }
                        function LinkedIn()
                        {
                            window.open('http://www.linkedin.com', 'LinkedIn', 'height=800,width=650');
                        }
                        function Facebook()
                        {
                            window.open('http://www.facebook.com', 'Facebook', 'height=800,width=650');
                        }
                        function Google()
                        {
                            window.open('http://plus.google.com', 'Google+', 'height=600,width=650');
                        }
                    </script>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/libs/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/public/basetheme.js"></script>
    </body>
</html>
