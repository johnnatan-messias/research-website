<?php
    $names = array(
                   "johnnatan_messias" => array("<strong>Johnnatan Messias</strong>", "http://johnnatan.me"),
                   "fabricio_benevenuto"=> array("Fabrício Benevenuto", "http://homepages.dcc.ufmg.br/~fabricio"),
                   "mirella_moro" => array("Mirella M. Moro", "http://homepages.dcc.ufmg.br/~mirella"),
                   "ricardo_rabelo" => array("Ricardo Rabelo", "http://www.decom.ufop.br/imobilis/"),
                   "leandro_araujo" => array("Leandro A. A. Silva", "https://scholar.google.com/citations?user=Yy_1dTgAAAAJ&hl"),
                   "pedro_melo" => array("Pedro O. S Vaz de Melo", "http://homepages.dcc.ufmg.br/~olmo"),
                   "virgilio_almeida" => array("Virgílio Almeida", "http://homepages.dcc.ufmg.br/~virgilio"),
                   "adriano_veloso" => array("Adriano Veloso", "http://homepages.dcc.ufmg.br/~adrianov"),
                   "gabriel_magno" => array("Gabriel Magno", "http://homepages.dcc.ufmg.br/~magno"),
                   "pollyanna_goncalves" => array("Pollyanna Gonçalves", "http://homepages.dcc.ufmg.br/~pollyannaog"),
                   "daniel_hasan" => array("Daniel Dalip", "https://scholar.google.com/citations?user=mdYg2R0AAAAJ&hl"),
                   "julio_reis" => array("Julio C. S. Reis", "http://homepages.dcc.ufmg.br/~julio.reis"),
                   "filipe_ribeiro" => array("Filipe N. Ribeiro", "http://homepages.dcc.ufmg.br/~filiperibeiro"),
                   "philipe_melo" => array("Philipe Melo", "http://homepages.dcc.ufmg.br/~philipe"),
                   "marcos_goncalves" => array("Marcos Gonçalves", "http://www.dcc.ufmg.br/dcc/?q=en/node/226"),
                   "lucas_schmidt" => array("Lucas Schmidt", "http://lattes.cnpq.br/9441748418599315"),
                   "mainack_mondal" => array("Mainack Mondal", "http://www.mpi-sws.org/~mainack/"),
                   "krishna_gummadi" => array("Krishna P. Gummadi", "http://www.mpi-sws.org/~gummadi/"),
                   "saptarshi_ghosh" => array("Saptarshi Ghosh", "https://sites.google.com/site/saptarshighosh/"),
                   "aniket_kate" => array("Aniket Kate", "https://www.cs.purdue.edu/homes/akate/"),
                   "matheus_araujo" => array("Matheus Araújo", "https://matheusaraujo.com"),
                   "ingmar_weber" => array("Ingmar Weber", "http://ingmarweber.de"),
                   "lucas_bastos" => array("Lucas Bastos", "http://homepages.dcc.ufmg.br/~lucasmbastos/"),
                   "emilio_zagheni" => array("Emilio Zagheni", "http://www.zagheni.net"),
                   "joao_p_diniz" => array("João P. Diniz", "http://homepages.dcc.ufmg.br/~jpaulo/"),
                   "manoel_miranda" => array("Manoel Miranda", "http://homepages.dcc.ufmg.br/~manoelrmj/"),
                   "miller_ferreira" => array("Miller Ferreira", "http://homepages.dcc.ufmg.br/~millermarques/"),
                   "elias_soares" => array("Elias Soares", "http://homepages.dcc.ufmg.br/~eliassoares/"),
                   "juhi_kulshrestha" => array("Juhi Kulshrestha", "http://www.mpi-sws.org/~juhi/"),
                   "motahhare_eslami" => array("Motahhare Eslami", "http://web.engr.illinois.edu/~eslamim2/"),
                   "bilal_zafar" => array("Muhammad Bilal Zafar", "http://www.mpi-sws.org/~mzafar/"),
                   "karrie_karahalios" => array("Karrie Karahalios", "http://www.karriekarahalios.com/"),
                   "abhijnan_chakraborty" => array("Abhijnan Chakraborty", "http://cse.iitkgp.ac.in/~abhijnan/"),
                   "niloy_ganguly" => array("Niloy Ganguly", "http://www.facweb.iitkgp.ernet.in/~niloy/"),
                   "pantelis_vikatos" => array("Pantelis Vikatos", "http://upatras.academia.edu/PantelisVikatos/"),
                   "haewoon_kwak" => array("Haewoon Kwak", "http://haewoon.io/"),
                   "jisun_an" => array("Jisun An", "http://jisun.me/"),
                   "gustavo_resende" => array("Gustavo Resende", "#"),
                   "marcio_silva" => array("Márcio Silva", "#"),
                   "jussara_almeida" => array("Jussara Almeida", "http://www.dcc.ufmg.br/~jussara/"),
                   "marisa_vasconcelos" => array("Marisa Vasconcelos", "https://scholar.google.com.br/citations?user=e5IvuJgAAAAJ&hl=en"),
                   "koustuv_saha" => array("Koustuv Saha", "http://koustuv.com/"),
                   "mahmoudreza_babaei" => array("Mahmoudreza Babaei", "https://people.mpi-sws.org/~babaei/"),
                   "lucas_henrique" => array("Lucas Henrique", "https://homepages.dcc.ufmg.br/~lhenriquecl/"),
                   "oana_goga" => array("Oana Goga", "http://lig-membres.imag.fr/gogao/"),
                   "elissa_redmiles" => array("Elissa M. Redmiles", "https://www.cs.umd.edu/~eredmiles/"),
                   "hugo_sousa" => array("Hugo Sousa", "https://homepages.dcc.ufmg.br/~hugosousa/"),
                   "kiran_garimella" => array("Kiran Garimella", "https://users.ics.aalto.fi/kiran/")
                   
                   );
    
    function parse_author_to_html($author){
        return '<a href="' . $author[1] . '" target="_blank">' . $author[0] . '</a>';
    }
    
    function get_authors($authors){
        global $names;
        $str = "";
        if(count($authors) == 1){
            $str = parse_author_to_html($names[$authors[0]]) . ".";
        }
        else if(count($authors) == 2){
            $str = parse_author_to_html($names[$authors[0]]) . " and " . parse_author_to_html($names[$authors[1]]) . ".";
        }
        else{
            for($i=0; $i<count($authors) - 1; $i++){
                $str .= parse_author_to_html($names[$authors[$i]]) . ", ";
            }
            $str .= "and " . parse_author_to_html($names[$authors[$i]]) . ".";
        }
        return $str;
    }
    
    $modified_date = date("F d, Y", filemtime("index.php"));
    
    ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//PT-BR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html lang="pt-br">

  <head>
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="util/css/bootstrap.min.css">
    <script src="util/js/jquery.min.js"></script>
    <script src="util/js/popper.min.js"></script>
    <script src="util/js/bootstrap.min.js"></script>
    <title>Johnnatan Messias</title>
  </head>

  <body>
    <div class="container">
      <div id="logo"></div>
      <h1>Johnnatan Messias</h1>
      <div id="accordion">
        <div class="card">
          <div class="card-header bg-secondary">
            <a class="card-link text-white" data-toggle="collapse" href="#about">
              <strong>About</strong>
            </a>
          </div>
          <div id="about" data-parent="#accordion" class="collapse show">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <img src="util/images/profile.jpg" alt="Johnnatan Messias." class="rounded" height="120px">
                </div>
                <div class="col-md-9">
                  I am a Ph.D. student at the Max Planck Institute for Software Systems (<a href="https://www.mpi-sws.org/" target="_blank">MPI-SWS</a>) in the <a href="http://socialnetworks.mpi-sws.org" target="_blank">Social Computing Research</a> 
                  group. I am advised by <a href="http://www.mpi-sws.org/~gummadi/" target="_blank">Dr. Krishna P. Gummadi</a>.
                  <br>
                  <br>
I completed my Master's degree in Computer Science at the Universidade Federal de Minas Gerais (UFMG) with <a href="https://homepages.dcc.ufmg.br/~fabricio/" target="_blank">Dr.
Fabrício Benevenuto</a> as my advisor. During my MSc, I also held two research intern positions at MPI-SWS in Saarbrücken, Germany. I studied Computer Science at Eötvös Loránd
                  University (ELTE) in Budapest, Hungary, in 2013/2014 during my exchange program (Science Without Borders
                  - CAPES). I completed my undergraduate degree in Computer Science at the Universidade Federal de Ouro Preto (UFOP) in 2015.
                  <br>
                  <br>
                  <u>Interests</u>: Blockchains, Data Analysis, Sentiment Analysis, Social Networks.
                  <br>
                  <br>
                  <u>My complete name</u>: Johnnatan Messias Peixoto Afonso.
                  <!-- <br>Therefore, my family name is <u>Afonso</u>. However, I sign only <u>Johnnatan Messias</u> on my works. -->
                  <br>
                  <!-- <br> I have Erdos Number 4! Check it out:
                  <br> Johnnatan Messias -> Ingmar Weber -> Zvi Lotker -> Noga Alon -> Paul Erdos
                  <br> -->
                  <br> My CV is available for download:
                  <a href="pdf/resume_eng_johnnatan_messias.pdf" target="_blank">
                    <i>in English</i>
                  </a>.
                  <br>
                  <i>Last update:
                    <?= $modified_date ?>
                  </i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-secondary">
            <a class="collapsed card-link text-white" data-toggle="collapse" href="#publications">
              <strong>Publications</strong>
            </a>
          </div>
          <div id="publications" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <h3>International Journal Publications </h3>

              <ul class="list-inline">
                <li>Search Bias Quantification: Investigating Political Bias in Social Media and Web Search
                  <ul>
                    <li>
                      <?= get_authors(array("juhi_kulshrestha","motahhare_eslami","johnnatan_messias","bilal_zafar","saptarshi_ghosh","krishna_gummadi","karrie_karahalios")) ?>
                    </li>
                    <li>Information Retrieval Journal. Springer. Volume 22, Issue 1-2, April 2019</li>
                    <li>
                      <a href="#political_leaning_journal" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="https://t.co/RaTVDuUiMG" target="_blank">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="bibtex/kulshrestha_political_it2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="https://twitter-app.mpi-sws.org/search-bias-split-view/" target="_blank">
                        <span class="badge badge-primary">System 1</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/search-political-bias-of-users/" target="_blank">
                        <span class="badge badge-primary">System 2</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="political_leaning_journal" class="collapse">
                  <b>Abstract:</b> Users frequently use search systems on the Web as well as online social media to learn about 
                  ongoing events and public opinion on personalities. Prior studies have shown that the 
                  top-ranked results returned by these search engines can shape user opinion about the topic 
                  (e.g., event or person) being searched. In case of polarizing topics like politics, 
                  where multiple competing perspectives exist, the political bias in the top search results 
                  can play a significant role in shaping public opinion towards (or away from) certain perspectives. 
                  Given the considerable impact that search bias can have on the user, we propose a generalizable 
                  search bias quantification framework that not only measures the political bias in ranked list 
                  output by the search system but also decouples the bias introduced by the different 
                  sources — input data and ranking system. We apply our framework to study the political 
                  bias in searches related to 2016 US Presidential primaries in Twitter social media search 
                  and find that both input data and ranking system matter in determining the final search 
                  output bias seen by the users. And finally, we use the framework to compare the relative bias 
                  for two popular search systems — Twitter social media search and Google web search — for queries 
                  related to politicians and political events. We end by discussing some potential solutions to 
                  signal the bias in the search results to make the users more aware of them. </div>
              </ul>

              <ul class="list-inline">
                <li>Managing Longitudinal Exposure of Socially Shared Data on the Twitter Social Media
                  <ul>
                    <li>
                      <?= get_authors(array("mainack_mondal","johnnatan_messias","saptarshi_ghosh","krishna_gummadi","aniket_kate")) ?>
                    </li>
                    <li>International Journal of Advances in Engineering Sciences and Applied Mathematics (Special Issue on Data
                      Sciences), Springer, 2017.</li>
                    <li>
                      <a href="#managing_longitudinal_exposure" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="http://rdcu.be/ARJP" target="_blank">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/footprint" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="managing_longitudinal_exposure" class="collapse">
                  <b>Abstract:</b> On most online social media sites today, user-generated data remains accessible to allowed
                  viewers unless and until the data owner changes her privacy preferences. In this paper, we present a large-scale
                  measurement study focused on understanding how users control the longitudinal exposure of their publicly
                  shared data on social media sites. Our study, using data from Twitter, finds that a significant fraction
                  of users withdraw a surprisingly large percentage of old publicly shared data—more than 28% of 6-year old
                  public posts (tweets) on Twitter are not accessible today. The inaccessible tweets are either selectively
                  deleted by users or withdrawn by users when they delete or make their accounts private. We also found a
                  significant problem with the current exposure control mechanisms—even when a user deletes her tweets or
                  her account, the current mechanisms leave traces of residual activity, i.e., tweets from other users sent
                  as replies to those deleted tweets or accounts still remain accessible. We show that using this residual
                  information one can recover significant information about the deleted tweets or even characteristics of
                  the deleted accounts. To the best of our knowledge, we are the first to study the information leakage resulting
                  from residual activities of deleted tweets and accounts. Finally, we propose two exposure control mechanisms
                  that eliminates information leakage via residual activities. One of our mechanisms optimize for allowing
                  meaningful social interactions with user posts and another mechanism aims to control longitudinal exposure
                  via anonymization . We discuss the merits and drawbacks of our proposed mechanisms compared to existing
                  mechanisms.</div>
              </ul>
              <ul class="list-inline">
                <li>An Evaluation of Sentiment Analysis for Mobile Devices
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","joao_p_diniz","elias_soares","miller_ferreira","matheus_araujo","lucas_bastos","manoel_miranda","fabricio_benevenuto")) ?>
                    </li>
                    <li>In Springer Nature Social Network Analysis and Mining. Volume 7, Issue 1, 2017. </li>
                    <li>
                      <a href="#mobile_snam" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="http://rdcu.be/rZtC" target="_blank">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="bibtex/messias_mobile_snam2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="mobile_snam" class="collapse">
                  <b>Abstract:</b> Sentiment Analysis has become a key tool to extract knowledge from data containing opinions
                  and sentiments, particularly, data from online social systems. With the increasing use of smartphones to
                  access social media platforms, a new wave of applications that explore sentiment analysis in the mobile
                  environment is beginning to emerge. However, there are various existing sentiment analysis methods and
                  it is unclear which of them are deployable in the mobile environment. In this paper, we provide the first
                  of a kind study in which we compare the performance of 14 sentence-level sentiment analysis methods in
                  the mobile environment. To do that, we adapted these methods to run on Android OS and then we measure their
                  performance in terms of memory, CPU, and battery consumption. Our findings unveil methods that require
                  almost no adaptations and run relatively fast as well as methods that could not be deployed due to excessive
                  use of memory. We hope our effort provides a guide to developers and researchers interested in exploring
                  sentiment analysis as part of a mobile application and can help new applications to be executed without
                  the dependency of a server-side API. We also share the Android API that implements all the 14 sentiment
                  analysis used in this paper. </div>
              </ul>
              <ul class="list-inline">
                <li>Longitudinal Privacy Management in Social Media: The Need for Better Controls
                  <ul>
                    <li>
                      <?= get_authors(array("mainack_mondal","johnnatan_messias","saptarshi_ghosh","krishna_gummadi","aniket_kate")) ?>
                    </li>
                    <li>IEEE Internet Computing (Special Issue on Usable Privacy & Security). Volume 21, Issue 3, May-June, 2017.
                      </li>
                    <li>
                      <a href="#longitudinal_privacy" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/mondal_ic17.pdf" target="_blanck">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="http://ieeexplore.ieee.org/document/7927870/" target="_blanck">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="bibtex/mondal_ic_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/footprint" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="longitudinal_privacy" class="collapse">
                  <b>Abstract:</b> This large-scale measurement study of Twitter focuses on understanding how users control
                  the longitudinal exposure of their publicly shared social data — that is, their tweets — and the limitations
                  of currently used control mechanisms. Our study finds that, while Twitter users widely employ longitudinal
                  exposure control mechanisms, they face two fundamental problems. First, even when users delete their data
                  or account, the current mechanisms leave signficant traces of residual activity. Second, these mechanisms
                  single out withdrawn tweets or accounts, attracting undesirable attention to them. To address both problems,
                  an inactivity- based withdrawal scheme for improved longitudinal exposure control is explored. </div>
              </ul>
              <ul class="list-inline">
                <li>You followed my bot! Transforming robots into influential users in Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","lucas_schmidt","ricardo_rabelo","fabricio_benevenuto")) ?>
                    </li>
                    <li>First Monday. Volume 18, Issue 7, July, 2013. </li>
                    <li>
                      <a href="#bot_scarina" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="http://firstmonday.org/ojs/index.php/fm/article/view/4217/3700" target="_blank">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="http://homepages.dcc.ufmg.br/~fabricio/download/firstmonday13.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="bot_scarina" class="collapse">
                  <b>Abstract:</b> Systems like Klout and Twitalyzer were developed as an attempt to measure the influence of
                  users within social networks. Although the algorithms used by these systems are not public known, they
                  have been widely used to rank users according to their influence, especially in the Twitter social network.
                  As media companies might base their viral marketing campaigns on influence scores, users might attempt
                  to boost their influence scores with simple mechanisms like following unknown users to be followed back
                  or even interacting with those who reciprocate these actions. In this paper, we investigate if widely used
                  influence scores are vulnerable and easy to manipulate. Our approach consists of developing Twitter bot
                  accounts able to interact with real users to verify strategies that can increase their influence scores
                  according to different systems. Our results show that it is possible to become influential using very simple
                  strategies, suggesting that these systems should review their influence score algorithms to avoid accounting
                  with automatic activity. </div>
              </ul>

              <h3>Conference Publications </h3>

            <ul class="list-inline">
                <li>(Mis)Information Dissemination in WhatsApp: Gathering, Analyzing and Countermeasures
                  <ul>
                    <li>
                      <?= get_authors(array("gustavo_resende","philipe_melo","hugo_sousa","johnnatan_messias","marisa_vasconcelos","jussara_almeida","fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the 28th Web Conference (WWW'19). San Francisco, USA. May, 2019.
                    </li>
                    <li>
                      <a href="#www-whatsapp" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                    <a href="pdf/resende_www2019_whatsapp.pdf" target="_blank">
                    <span class="badge badge-danger">PDF</span>
                    </a>
                    <a href="bibtex/resende_www_2019.bib" target="_blank">
                    <span class="badge badge-secondary">BibTeX</span>
                    </a>
                    <a href="http://www.whatsapp-monitor.dcc.ufmg.br" target="_blank">
                    <span class="badge badge-primary">System</span>
                    </a>
                    </li>
                  </ul>
                </li>
                <div id="www-whatsapp" class="collapse">
                  <b>Abstract:</b> WhatsApp has revolutionized the way people communicate and interact. It is not only cheaper than the traditional Short Message Service (SMS) communication but it also brings a new form of mobile communication: the group chats. Such groups are great forums for collective discussions on a variety of topics. In particular, in events of great social mobilization, such as strikes and electoral campaigns, WhatsApp group chats are very attractive as they facilitate information exchange among interested people. Yet, recent events have raised concerns about the  spreading of misinformation in WhatsApp. In this work, we analyze information dissemination within WhatsApp, focusing on publicly accessible  political-oriented groups, collecting all shared messages during major social events in Brazil: a national truck drivers' strike and the Brazilian presidential campaign. We analyze the types of content shared within such groups as well as the network structures that emerge from user interactions within and cross-groups. We then deepen our analysis by identifying the presence of misinformation among the shared images using labels provided by journalists and by a proposed automatic procedure based on Google searches. We identify the most important sources of the fake images and analyze how they propagate across WhatsApp groups and from/to other Web platforms.
                </div>
              </ul>
            
              <ul class="list-inline">
                <li>WhatsApp Monitor: A Fact-Checking System for WhatsApp
                  <ul>
                    <li>
                      <?= get_authors(array("philipe_melo","johnnatan_messias","gustavo_resende","kiran_garimella","jussara_almeida", "fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the 13th International AAAI Conference on Web and Social Media (ICWSM’19). Munich, Germany. June, 2019.
                    </li>
                    <li>
                      <a href="#icwsm-whatsapp" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                    <a href="pdf/melo-icwsm-2019-demo.pdf" target="_blank">
                    <span class="badge badge-danger">PDF</span>
                    </a>
                    <a href="bibtex/philipe_whatsapp_icwsm2019.bib" target="_blank">
                    <span class="badge badge-secondary">BibTeX</span>
                    </a>
                    <a href="http://www.whatsapp-monitor.dcc.ufmg.br" target="_blank">
                    <span class="badge badge-primary">System</span>
                    </a>
                    </li>
                  </ul>
                </li>
                <div id="icwsm-whatsapp" class="collapse">
                  <b>Abstract:</b> WhatsApp is the most popular communication application in many developing countries such as Brazil, India, and Mexico, where many people use it as an interface to the web. Due to its encrypted and peer-to-peer nature feature, it is hard for researchers to study which content people share through WhatsApp at scale. In this demo paper, we propose <i>WhatsApp Monitor</i> (<a href="http://www.whatsapp-monitor.dcc.ufmg.br" target="_blank">http://www.whatsapp-monitor.dcc.ufmg.br</a>), a web-based system that helps researchers and journalists explore the nature of content shared on WhatsApp public groups from two different contexts: Brazil and India. Our tool monitors multiple content categories such as images, videos, audio, and textual messages posted on a set of WhatsApp groups and displays the most shared content per day. Our tool has been used for monitoring content during the 2018 Brazilian general election and was one of the major sources for estimating the spread of misinformation and helping fact-checking efforts.
                </div>
              </ul>
                                                                    
              <ul class="list-inline">
                <li>On Microtargeting Socially Divisive Ads: A Case Study of Russia-Linked Ad Campaigns on Facebook
                  <ul>
                    <li>
                      <?= get_authors(array("filipe_ribeiro","koustuv_saha","mahmoudreza_babaei","lucas_henrique","johnnatan_messias","fabricio_benevenuto","oana_goga","krishna_gummadi","elissa_redmiles")) ?>
                    </li>
                    <li>In Proceedings of the Conference on Fairness, Accountability, and Transparency (FAT*'19), Atlanta, Georgia.
                      January 2019.</li>
                    <li>
                      <a href="#fat_ad_political_targeting" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/ribeiro_fat19_ira_ads.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/ribeiro_fat_2019.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="http://blackbird.dcc.ufmg.br/ira_ads/" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="fat_ad_political_targeting" class="collapse">
                  <b>Abstract:</b> Targeted advertising is meant to improve the efficiency of matching advertisers 
                  to their customers. However, targeted advertising can also be abused by malicious advertisers to 
                  efficiently reach people susceptible to false stories, stoke grievances, and incite social conflict.
                  Since targeted ads are not seen by non-targeted and non-vulnerable people, malicious ads are likely 
                  to go unreported and their effects undetected. This work examines a specific case of malicious advertising, 
                  exploring the extent to which political ads from the Russian Intelligence Research Agency (IRA) run prior to 
                  2016 U.S. elections exploited Facebook's targeted advertising infrastructure to efficiently target ads on divisive 
                  or polarizing topics (e.g., immigration, race-based policing) at vulnerable sub-populations. In particular, 
                  we do the following: (a) We conduct U.S. census-representative surveys to characterize how users with different 
                  political ideologies <i>report</i>, <i>approve</i>, and 
                  <i>perceive truth in</i> the content of the IRA ads.
                  Our surveys show that many ads are "divisive": they elicit very different reactions from people belonging to 
                  different socially salient groups. (b) We characterize how these divisive ads are targeted to sub-populations that 
                  feel particularly aggrieved by the status quo. Our findings support existing calls for greater transparency of 
                  content and targeting of political ads. (c) We particularly focus on how the Facebook ad API facilitates such targeting. 
                  We show how the enormous amount of personal data Facebook aggregates about users and makes available to advertisers 
                  enables such malicious targeting.
                </div>
              </ul>

              <ul class="list-inline">
                <li>White, Man, and Highly Followed: Gender and Race Inequalities in Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","pantelis_vikatos","fabricio_benevenuto")) ?>
                    </li>
                    <li>In Proceedings of the IEEE/WIC/ACM International Conference on Web Intelligence (WI'17). Leipzig, Germany.
                      August 2017.</li>
                    <li>
                      <a href="#inequality_demographics" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/messias_wi17_inequality.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/messias_wi_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="inequality_demographics" class="collapse">
                  <b>Abstract:</b> Social media is considered a democratic space in which people connect and interact with each
                  other regardless of their gender, race, or any other demographic factor. Despite numerous efforts that
                  explore demographic factors in social media, it is still unclear whether social media perpetuates old inequalities
                  from the offline world. In this paper, we attempt to identify gender and race of Twitter users located
                  in U.S. using advanced image processing algorithms from Face++. Then, we investigate how different demographic
                  groups (i.e. male/female, Asian/Black/White) connect with other. We quantify to what extent one group follow
                  and interact with each other and the extent to which these connections and interactions reflect in inequalities
                  in Twitter. Our analysis shows that users identified as White and male tend to attain higher positions
                  in Twitter, in terms of the number of followers and number of times in user's lists. We hope our effort
                  can stimulate the development of new theories of demographic information in the online space.
                </div>
              </ul>

              <ul class="list-inline">
                <li>Demographics of News Sharing in the U.S. Twittersphere
                  <ul>
                    <li>
                      <?= get_authors(array("julio_reis","haewoon_kwak","jisun_an","johnnatan_messias","fabricio_benevenuto")) ?>
                    </li>
                    <li>In Proceedings of the 28th ACM Conference on Hypertext and Social Media (HT'17). Prague, Czech Republic.
                      July 2017.</li>
                    <li>
                      <a href="#news_demographics" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/reis_ht17_news-sharing.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/reis_ht_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="news_demographics" class="collapse">
                  <b>Abstract:</b> The widespread adoption and dissemination of online news through social media systems have
                  been revolutionizing many segments of our society and ultimately our daily lives. In these systems, users
                  can play a central role as they share content to their friends. Despite that, little is known about news
                  spreaders in social media. In this paper, we provide the first of its kind in-depth characterization of
                  news spreaders in social media. In particular, we investigate their demographics, what kind of content
                  they share, and the audience they reach. Among our main findings, we show that males and white users tend
                  to be more active in terms of sharing news, biasing the news audience to the interests of these demographic
                  groups. Our results also quantify differences in interests of news sharing across demographics, which has
                  implications for personalized news digests.
                </div>
              </ul>

              <ul class="list-inline">
                <li>Linguistic Diversities of Demographic Groups in Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("pantelis_vikatos","johnnatan_messias","manoel_miranda","fabricio_benevenuto")) ?>
                    </li>
                    <li>In Proceedings of the 28th ACM Conference on Hypertext and Social Media (HT'17). Prague, Czech Republic.
                      July 2017.</li>
                    <li>
                      <a href="#linguistics_demographics" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/vikatos_ht17_linguistic-diversity.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/vikatos_ht_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="linguistics_demographics" class="collapse">
                  <b>Abstract:</b> The massive popularity of online social media provides a unique opportunity for researchers
                  to study the linguistic characteristics and patterns of user's interactions. In this paper, we provide
                  an in-depth characterization of language usage across demographic groups in Twitter. In particular, we
                  extract the gender and race of Twitter users located in the U.S. using advanced image processing algorithms
                  from Face++. Then, we investigate how demographic groups (i.e. male/female, Asian/Black/White) differ in
                  terms of linguistic styles and also their interests. We extract linguistic features from 6 categories (affective
                  attributes, cognitive attributes, lexical density and awareness, temporal references, social and personal
                  concerns, and interpersonal focus), in order to identify the similarities and differences in particular
                  writing set of attributes. In addition, we extract the absolute ranking difference of top phrases between
                  demographic groups. As a dimension of diversity, we also use the topics of interest that we retrieve from
                  each user. Our analysis unveils clear differences in the writing styles (and the topics of interest) of
                  different demographic groups, with variation seen across both gender and race lines. We hope our effort
                  can stimulate the development of new studies related to demographic information in the online space.
                </div>
              </ul>

              <ul class="list-inline">
                <li>Who Makes Trends? Understanding Demographic Biases in Crowdsourced Recommendations
                  <ul>
                    <li>
                      <?= get_authors(array("abhijnan_chakraborty","johnnatan_messias","fabricio_benevenuto","saptarshi_ghosh","niloy_ganguly","krishna_gummadi")) ?>
                    </li>
                    <li>In Proceedings of the Int'l AAAI Conference on Web and Social (ICWSM’17). Montreal, Canada. May 2017.</li>
                    <li>
                      <a href="#demographic_who_makes_trends" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/chakraborty_icwsm17_who_makes_trends.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/chakraborty_icwsm_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/who-makes-trends/" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="demographic_who_makes_trends" class="collapse">
                  Users of social media sites like Facebook and Twitter rely on crowdsourced content recommendation systems (e.g., Trending
                  Topics) to retrieve important and useful information. Contents selected for recommendation indirectly give
                  the initial users who promoted (by liking or posting) the content an opportunity to propagate their messages
                  to a wider audience. Hence, it is important to understand the demographics of people who make a content
                  worthy of recommendation, and explore whether they are representative of the media site's overall population.
                  In this work, using extensive data collected from Twitter, we make the first attempt to quantify and explore
                  the demographic biases in the crowdsourced recommendations. Our analysis, focusing on the selection of
                  trending topics, finds that a large fraction of trends are promoted by crowds whose demographics are significantly
                  different from the overall Twitter population. More worryingly, we find that certain demographic groups
                  are systematically under-represented among the promoters of the trending topics. To make the demographic
                  biases in Twitter trends more transparent, we developed and deployed a Web-based service "Who-Makes-Trends"
                  at
                  <a href="http://twitter-app.mpi-sws.org/who-makes-trends" target="_blank">http://twitter-app.mpi-sws.org/who-makes-trends</a>.
                </div>
              </ul>

              <ul class="list-inline">
                <li>Quantifying Search Bias: Investigating Sources of Bias for Political Searches in Social Media
                  <ul>
                    <li>
                      <?= get_authors(array("juhi_kulshrestha","motahhare_eslami","johnnatan_messias","bilal_zafar","saptarshi_ghosh","krishna_gummadi","karrie_karahalios")) ?>
                    </li>
                    <li>In Proceedings of the ACM Conference on Computer Supported Cooperative Work and Social Computing (CSCW'17).
                      Portland, Oregon, USA, February 2017. </li>
                    <li>
                      <a href="#political_leaning" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/kulshrestha_cscw17_search_bias.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/juhi_cscw_2017.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/search-political-bias-of-users/" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="political_leaning" class="collapse">
                  <b>Abstract:</b> To help their users to discover the most interesting contents at a particular time, social
                  media sites like Facebook and Twitter deploy content recommendation systems (such as Trending Topics),
                  which often rely on crowdsourced popularity signals to select the contents. Once the contents are selected
                  for recommendation, they reach a large population, effectively giving the initial users of the contents
                  an opportunity to propagate their messages to the wider public. Hence, it is extremely important to understand
                  the demographics of people who make a content worthy of recommendation, and explore whether there are demographic
                  biases in the recommended contents where the majority of the recommended contents were initially popular
                  with crowds exhibiting skewed demographic distributions.
                  <br> In this work, using extensive data collected from Twitter, we make the first attempt to quantify and explore
                  the demographic biases in the crowdsourced recommendations (particularly, in the selection of trending
                  topics). In our analysis, we find that very different topics are popular among different demographic groups,
                  and in practice, there is a bias towards a particular demographic while selecting the trending topics.
                  We further propose and evaluate different techniques to limit such demographic biases in trending topic
                  selection. </div>
              </ul>
              <ul class="list-inline">
                <li>From Migration Corridors to Clusters: The Value of Google+ Data for Migration Studies
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","fabricio_benevenuto","ingmar_weber","emilio_zagheni")) ?>
                    </li>
                    <li>In Proceedings of the IEEE/ACM International Conference on Advances in Social Networks Analysis and Mining
                      (ASONAM’16). San Francisco, USA. August 2016. </li>
                    <li>
                      <a href="#migration" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/messias_asonam16_migration.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/messias_migration_asonam2016.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="https://prezi.com/ygvupwzog86t/from-migration-corridors-to-clusters-the-value-of-google-data-for-migration-studies/"
                        target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                      <a href="migration-dataset/" target="_blank">
                        <span class="badge badge-warning">Dataset</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="migration" class="collapse">
                  <b>Abstract:</b> Recently, there have been considerable efforts to use online data to investigate international
                  migration. These efforts show that Web data are valuable for estimating migration rates and are relatively
                  easy to obtain. However, existing studies have only investigated flows of people along migration corridors,
                  i.e. between pairs of countries. In our work, we use data about "places lived" from millions of Google+
                  users in order to study migration "clusters", i.e. groups of countries in which individuals have lived.
                  For the first time, we consider information about more than two countries people have lived in. We argue
                  that these data are very valuable because this type of information is not available in traditional demographic
                  sources which record country-to-country migration flows independent of each other. We show that migration
                  clusters of country triads cannot be identified using information about bilateral flows alone. To demonstrate
                  the additional insights that can be gained by using data about migration clusters, we first develop a model
                  that tries to predict the prevalence of a given triad using only data about its constituent pairs. We then
                  inspect the groups of three countries which are more or less prominent, compared to what we would expect
                  based on bilateral flows alone. Next, we identify a set of features such as a shared language or colonial
                  ties that explain which triple of country pairs are more or less likely to be clustered when looking at
                  country triples. Then we select and contrast a few cases of clusters that provide some qualitative information
                  about what our data set shows. The type of data that we use is potentially available for a number of social
                  media services. We hope that this first study about migration clusters will stimulate the use of Web data
                  for the development of new theories of international migration that could not be tested appropriately before.
                  </div>
              </ul>
              <ul class="list-inline">
                <li>Towards Sentiment Analysis for Mobile Devices
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","joao_p_diniz","elias_soares","miller_ferreira","matheus_araujo","lucas_bastos","manoel_miranda","fabricio_benevenuto")) ?>
                    </li>
                    <li>In Proceedings of the IEEE/ACM International Conference on Advances in Social Networks Analysis and Mining
                      (ASONAM’16). San Francisco, USA. August 2016.</li>
                    <li>
                      <a href="#mobile" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/messias_asonam16_mobile.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="bibtex/messias_mobile_asonam2016.bib" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="pdf/poster-towards_sentiment_analysis_for_mobile_devices_asonam_2016.pdf">
                        <span class="badge badge-light">Slides</span>
                      </a>
                      <a href="http://www.ifeel.dcc.ufmg.br" target="_blank">
                        <span class="badge badge-warning">Dataset</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="mobile" class="collapse">
                  <b>Abstract:</b> The increasing use of smartphones to access social media platforms opens a new wave of applications
                  that explore sentiment analysis in the mobile environment. However, there are various existing sentiment
                  analysis methods and it is unclear which of them are deployable in the mobile environment. This paper provides
                  the first of a kind study in which we compare the performance of 17 sentence-level sentiment analysis methods
                  in the mobile environment. To do that, we adapted these sentence-level methods to run on Android OS and
                  then we measure their performance in terms of memory usage, CPU usage, and battery consumption. Our findings
                  unveil sentence-level methods that require almost no adaptations and run relatively fast as well as methods
                  that could not be deployed due to excessive use of memory. We hope our effort provides a guide to developers
                  and researchers interested in exploring sentiment analysis as part of a mobile application and can help
                  new applications to be executed without the dependency of a server-side API. </div>
              </ul>
              <ul class="list-inline">
                <li>Forgetting in Social Media: Understanding and Controlling Longitudinal Exposure of Socially Shared Data
                  <ul>
                    <li>
                      <?= get_authors(array("mainack_mondal","johnnatan_messias","saptarshi_ghosh","krishna_gummadi","aniket_kate")) ?>
                    </li>
                    <li>In Proceedings of the 12th Symposium on Usable Privacy and Security (SOUPS'16), Denver, CO, USA, June
                      2016. </li>
                    <li>
                      <a href="#footprint" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/mainack_soups16.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="https://www.usenix.org/biblio/export/bibtex/197324">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="http://twitter-app.mpi-sws.org/footprint" target="_blank">
                        <span class="badge badge-primary">System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="footprint" class="collapse">
                  <b>Abstract:</b> On most online social media sites today, user-generated data remains accessible to allowed
                  viewers unless and until the data owner changes her privacy preferences. In this paper, we present a large-scale
                  measurement study focussed on understanding how users control the longitudinal exposure of their publicly
                  shared data on social media sites. Our study, using data from Twitter, finds that a significant fraction
                  of users withdraw a surprisingly large percentage of old publicly shared data -- more than 28% of six-year
                  old public posts (tweets) on Twitter are not accessible today. The inaccessible tweets are either selectively
                  deleted by users or withdrawn by users when they delete or make their accounts private. We also found a
                  significant problem with the current exposure control mechanisms – even when a user deletes her tweets
                  or her account, the current mechanisms leave traces of residual activity, i.e., tweets from other users
                  sent as replies to those deleted tweets or accounts still remain accessible. We show that using this residual
                  information one can recover significant information about the deleted tweets or even characteristics of
                  the deleted accounts. To the best of our knowledge, we are the first to study th information leakage resulting
                  from residual activities of deleted tweets and accounts. Finally, we propose an exposure control mechanism
                  that eliminates information leakage via residual activities, while still allowing meaningful social interactions
                  with user posts. We discuss its merits and drawbacks compared to existing mechanisms.
                </div>
              </ul>

              <h3>Brazilian Venues</h3>
              <ul class="list-inline">
                <li>A System for Monitoring Public Political Groups in WhatsApp
                  <ul>
                    <li>
                      <?= get_authors(array("gustavo_resende","johnnatan_messias","marcio_silva","jussara_almeida","marisa_vasconcelos","fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the 24th Brazilian Symposium on Multimedia and the Web (Webmedia'18). Salvador, Brazil. October, 2018.
                    </li>
                    <li>
                      <a href="#webmedia-whatsapp" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/resende_webmedia2018_whatsapp.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="https://dl.acm.org/downformats.cfm?id=3264662&parent_id=3243082&expformat=bibtex" target="_blank">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="webmedia-whatsapp" class="collapse">
                  <b>Abstract:</b> In Brazil, 48% of the population use WhatsApp to share and discuss news. 
                  Currently, there are serious concerns that this platform can become a fertile ground 
                  for groups interested in disseminating misinformation, especially as part of articulated 
                  political campaigns. Particularly, WhatsApp provides an important space for users to engage 
                  in public conversations that worth attention, the public groups. These groups are suitable 
                  for political activism and social movement organization. Additionally, it is reasonable to 
                  assume that a malicious misinformation campaign might attempt to maximize the audience of a 
                  fake story by sharing it in existing public groups. In this paper, we present a system for gathering, 
                  analyzing and visualize public groups in WhatsApp. In addition to describe our methodology, 
                  we also provide a brief characterization of the content shared in 127 Brazilian groups. 
                  We hope our system can help journalists and researchers to understand the repercussion of 
                  events related to the Brazilian elections within these groups. 
                </div>
              </ul>

              <ul class="list-inline">
                <li>Algoritmos de Aprendizado de Máquina para Predição de Resultados das Lutas de MMA
                  <ul>
                    <li>
                      <?= get_authors(array("leandro_araujo","johnnatan_messias","mirella_moro","pedro_melo","fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the 30th Brazilian Symposium on Databases (SBBD'15). Petrópolis, Brazil. October, 2015.
                    </li>
                    <li>
                      <a href="#mma" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/leandro_sbbd15.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="mma" class="collapse">
                  <b>Abstract:</b> This paper proposes using machine learning algorithms to predict the outcome of an MMA fight
                  based on the characteristics of the two fighters and their recent opponents. Our experimental evaluation
                  shows an approach to create a dataset applicable to individual sports and one of the evaluated algorithms
                  has 67% of successful predictions. </div>
              </ul>
              <ul class="list-inline">
                <li>Brazil Around the World: Characterizing and Detecting Brazilian Emigrants Using Google+
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","gabriel_magno","fabricio_benevenuto","adriano_veloso","virgilio_almeida")) ?>
                    </li>
                    <li> In Proceedings of 21st Brazilian Symposium on Multimedia and the Web (WebMedia'15). Manaus, Brazil. October,
                      2015.</li>
                    <li>
                      <a href="#brazil_migration" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/messias_webmedia15.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="http://dl.acm.org/downformats.cfm?id=2820447&parent_id=2820426&expformat=bibtex&CFID=558361144&CFTOKEN=74227462">
                        <span class="badge badge-secondary">BibTeX</span>
                      </a>
                      <a href="https://prezi.com/g5umhzfqsepc/brazil-around-the-world-characterizing-and-detecting-brazilian-emigrants-using-google-webmedia15/"
                        target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="brazil_migration" class="collapse">
                  <b>Abstract:</b> Currently available data about people whose left their home country to live in a foreign
                  country does not adequately capture the standards of contemporary global migration flows. A new trend for
                  migration studies is to study the data from the Internet, either by Social Networks or other data in the
                  WEB. In this study, we collected users data from the social network Google+ to investigate which features
                  of Brazilian users are relevant to classify them as a possible emigrant. Our study uses machine learning
                  techniques, SVM. We selected some features to compose our dataset. Our results show that the network features
                  were the ones that had greater capacity for discrimination. The most relevant for the prediction of Brazilian
                  emigrants users are, in order: reciprocity, PageRank, in-degree, clustering coefficient and ratio of incoming
                  foreigners. </div>
              </ul>
              <ul class="list-inline">
                <li>Bazinga! Caracterizando e Detectando Sarcasmo e Ironia no Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("pollyanna_goncalves","daniel_hasan","julio_reis","johnnatan_messias","filipe_ribeiro","philipe_melo","leandro_araujo","marcos_goncalves","fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the Proceedings of the Brazilian Workshop on Social Network Analysis and Mining (BraSNAM).
                      Recife, Brazil. July, 2015. </li>
                    <li>
                      <a href="#bazinga" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/goncalves_brasnam15.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="http://prezi.com/adwg0-dagkwz/?utm_campaign=share&utm_medium=copy&rc=ex0share" target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="bazinga" class="collapse">
                  <b>Abstract:</b> Sarcasm and irony are widely used forms of speech used inside and outside the Web, having
                  the power to transform a sentence regarding its polarity or sense. The ability of characterizing and detecting
                  sarcastic and ironic messages on data collected from Web could improve many decision-making systems based
                  on Natural Language Processing (NLP) such as the sentiment analysis, text summarization and review ranking
                  systems. In this work, we propose some approaches to the task of characterization and detection of sarcasm
                  and irony in messages posted on Twitter online social network. Using an automatically collected dataset
                  with the hashtags “#sarcasm” and“#irony”, and by exploiting a large set of characterization and classification
                  techniques, our results show satisfactory rates of accuracy and Macro-F1. </div>
              </ul>
              <ul class="list-inline">
                <li>Bots Sociais: Como robôs podem se tornar pessoas influentes no Twitter?
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","fabricio_benevenuto","ricardo_rabelo")) ?>
                    </li>
                    <li> In the Revista Eletrônica de Sistemas de Informação (RESI), v. 14, n. 2, mai-ago 2015, artigo 4..</li>
                    <li>
                      <a href="pdf/messias_ctic13.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="http://www.periodicosibepes.org.br/ojs/index.php/reinfo/article/view/1564" target="_blank">
                        <span class="badge badge-info">Link</span>
                      </a>
                      <a href="https://prezi.com/h3lbeufondwr/ctic-csbc2013-bots-sociais-como-robos-podem-se-tornar-pessoas-influentes-no-twitter/"
                        target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>

              <ul class="list-inline">
                <li>Sigam-me os bons! Transformando robôs em pessoas influentes no Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias","lucas_schmidt","ricardo_rabelo","fabricio_benevenuto")) ?>
                    </li>
                    <li> In Proceedings of the Proceedings of the Brazilian Workshop on Social Network Analysis and Mining (BraSNAM).
                      Curiba, Brazil. July, 2012.</li>
                    <li>
                      <a href="#sigamme" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/messias-brasnam12.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="https://prezi.com/qmqwpx8ijv75/brasnam-csbc2012-sigam-me-os-bons-transformando-robos-em-pessoas-influentes-no-twitter/"
                        target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="sigamme" class="collapse">
                  <b>Abstract:</b> Systems that classify influential users in social networks has been used with great frequency,
                  being referenced in scientific papers and the media as the ideal standard for evaluation of influence in
                  the social network Twitter. We consider this measure a complex and subjective and therefore suspect vulnerability
                  and ease of handling these systems. Based on this, we performed experiments and analyzes in two ranking
                  systems of influence: Klout and Twitalyzer. We create simple robots capable of interacting through Twitter
                  accounts and measure their influence. Our results show that it is possible to be influential through simple
                  strategies. This suggests that the systems do not have ideal metric to rank influence.
                </div>
              </ul>

              <h3>Master's Thesis</h3>
              <ul class="list-inline">
                <li>Characterizing Interconnections and Linguistic Patterns in Twitter
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias")) ?>
                    </li>
                    <li>Master in Computer Science</li>
                    <li>Universidade Federal de Minas Gerais - UFMG, 2017.</li>
                    <li>
                      <a href="#dissertation" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/master-thesis_johnnatan_messias.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="pdf/master-thesis_johnnatan_messias_talk-17.pdf" target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="dissertation" class="collapse">
                  <b>Abstract:</b> Social media is considered a democratic space in which people connect and interact with each
                  other regardless of their gender, race, or any other demographic aspect. Despite numerous efforts that
                  explore demographic aspects in social media, it is still unclear whether social media perpetuates old inequalities
                  from the offline world. In this dissertation, we attempt to identify gender and race of Twitter users located
                  in the United States using advanced image processing algorithms from Face++. We investigate how different
                  demographic groups (i.e. male/female, asian/black/white) connect with each other and differentiate them
                  regarding linguistic styles and also their interests. We quantify to what extent one group follows and
                  interacts with each other and the extent to which these connections and interactions reflect in inequalities
                  in Twitter. We also extract linguistic features from six categories (affective attributes, cognitive attributes,
                  lexical density and awareness, temporal references, social and personal concerns, and interpersonal focus)
                  in order to identify the similarities and the differences in the messages they share in Twitter. Furthermore,
                  we extract the absolute ranking difference of top phrases between demographic groups. As a dimension of
                  diversity, we also use the topics of interest that we retrieve from each user. Our analysis shows that
                  users identified as white and male tend to attain higher positions, in terms of the number of followers
                  and number of times in another user's lists, in Twitter. There are clear differences in the way of writing
                  across different demographic groups in both gender and race domains as well as in the topic of interest.
                  We hope our effort can stimulate the development of new theories of demographic information in the online
                  space. Finally, we developed a Web-based system that leverages the demographic aspects of users to provide
                  transparency to the Twitter trending topics system.
                </div>
              </ul>

              <h3>Bachelor's Thesis</h3>
              <ul class="list-inline">
                <li>Framework Para Sistemas de Navegação de Veículos Aéreos Não Tripulados
                  <ul>
                    <li>
                      <?= get_authors(array("johnnatan_messias")) ?>
                    </li>
                    <li>Bachelor in Computer Science</li>
                    <li>Universidade Federal de Ouro Preto - UFOP, 2014.</li>
                    <li>
                      <a href="#monografia" data-toggle="collapse">
                        <span class="badge badge-dark">Abstract</span>
                      </a>
                      <a href="pdf/mono_johnnatan_messias-15.pdf" target="_blank">
                        <span class="badge badge-danger">PDF</span>
                      </a>
                      <a href="http://github.johnnatan.me/ardrone-autonomous-flight" target="_blank">
                        <span class="badge badge-warning">Source Code</span>
                      </a>
                      <a href="https://prezi.com/n6rvp2jacjjk/framework-para-sistemas-de-navegacao-de-veiculos-aereos-nao-tripulados/" target="_blank">
                        <span class="badge badge-light">Slides</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <div id="monografia" class="collapse">
                  <b>Abstract:</b> Become autonomous unmanned flights undoubtedly enable new opportunities for scientific development.
                  The drones can be used in military services, for example, in combat or as well as for rescue missions,
                  aerial survey, supervision and inspection of a territory, attracting significant attention from media outlets
                  such as, for example, television stations, radio, newspapers and internet. The goal of this project is
                  whether it is possible to make viable autonomous flights at AR.Drone 2.0 and the understanding of its operation.
                  This will require the implementation of a control program for autonomous flights. This framework requires
                  the acquisition of data during the flight, which are obtained using sensors which use Arduino. The Arduino
                  communication with the drone is needed for the inclusion of new sensors and the use of the AR.Drone is
                  performed by the framework Node.js. Each remote button has a specific command, and may be in order for
                  the user to create own missions or even perform some missions previously implemented by the developer.
                  All tests were run on the AR.Drone 2.0, using the Node.js framework, sensors and a remote control. Through
                  the experiments and presented studies became possible to achieve the proposed objective, making possible
                  the implementation of autonomous flights in drone. As a result, for the realization of autonomous flight
                  we designed a framework where the user can create autonomous flight missions for the drone run them. These
                  commands are sent to the drone by the user due to use of a remote control. This remote control sends data
                  to a sensor connected to the Arduino that processes the data and then is read and interpreted by the drone.
                  </div>
              </ul>
              <p>
                <strong>For more information and complete curriculum visit:
                  <a href="https://www.linkedin.com/in/johnnatan-messias/" target="_blank">Linkedin</a>
                </strong>
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-secondary">
            <a class="collapsed card-link text-white" data-toggle="collapse" href="#press_coverage">
              <strong>Press Coverage</strong>
            </a>
          </div>
          <div id="press_coverage" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <p>Here is some coverage of my recent research on important blogs, magazines, and newspapers. </p>
              <h3>Gender and Race Inequalities in Twitter - paper on Web Intelligence'17</h3>
              <ul class="list-inline">
                <li>White, Man, and Highly Followed: Gender and Race Inequalities in Twitter.</li>
                <ul>
                  <li>MIT Technology Review:
                    <a href="https://www.technologyreview.com/s/608216/twitters-glass-ceiling-revealed-for-women-and-minority-races/" target="_blank">Twitter's Glass Ceiling Revealed for Women and Minority Races</a>.</li>
                  <li>Nexo Jornal:
                    <a href="https://www.nexojornal.com.br/expresso/2017/11/15/Como-o-Twitter-reproduz-desigualdades-de-gênero-e-raça-do-mundo-offline"
                      target="_blank">Como o Twitter reproduz desigualdades de gênero e raça do mundo offline</a>.</li>
                </ul>
              </ul>

              <h3>Making a bot influential in Twitter - paper on First Monday'13</h3>
              <ul class="list-inline">
                <li>You followed my bot! Transforming robots into influential users in Twitter.</li>
                <ul>
                  <li>The New York Times:
                    <a href="http://www.nytimes.com/2013/08/11/sunday-review/i-flirt-and-tweet-follow-me-at-socialbot.html?_r=2&amp;" target="_blank">I Flirt and Tweet. Follow Me at #Socialbot</a>. </li>
                  <li>Huffington Post Tech:
                    <a href="http://www.huffingtonpost.com/2013/07/08/twitter-bots-influence_n_3542561.html" target="_blank">Twitter Bots Have No Trouble Fooling You, Getting More Influence Than Oprah</a>
                  </li>
                  <li>Huffington Post Business:
                    <a href="http://www.huffingtonpost.com/2013/07/08/twitter-bots-influence_n_3542561.html?ncid=edlinkusaolp00000003&amp;ir=Business"
                      target="_blank">Twitter Bots Have No Trouble Fooling You, Getting More Influence Than Oprah</a>
                  </li>
                  <li>San Francisco Chronicle:
                    <a href="http://www.sfgate.com/entertainment/carroll/article/How-do-you-know-I-m-not-a-bot-4733265.php" target="_blank">How do you know I'm not a bot?</a>
                  </li>
                  <li>GizmodoBR:
                    <a href="http://gizmodo.uol.com.br/robo-twitter-influencia/" target="_blank">Como um bot brasileiro se tornou uma pessoa influente no Twitter</a>
                  </li>
                  <li>AOL Tech News:
                    <a href="http://www.aol.com/video/twitter-bots-gain-real-influence-analysts-find/517848461/" target="_blank">Twitter bots gain real influence, Analysts Find</a>
                  </li>
                  <li>G1 – Instante posterior.
                    <a href="http://g1.globo.com/platb/instanteposterior/category/relacionamentos-amorosos/" target="_blank">Feitos um para o outro</a>
                  </li>
                  <li>Folha de São Paulo.
                    <a href="http://www1.folha.uol.com.br/fsp/tec/124695-robo-social.shtml" target="_blank">Robô Social
                    </a>
                  </li>
                  <li>Dayly Dot:
                    <a href="http://www.dailydot.com/news/new-twitter-bots-klout-score-test/" target="_blank">The new generation of Twitter bots are disturbingly human</a>
                  </li>
                  <li>TheWeek:
                    <a href="http://theweek.com/article/index/261034/robot-pals-are-invading-social-media-mdash-and-its-time-to-unfriend-them"
                      target="_blank">Robot 'pals' are invading social media — and it's time to unfriend them</a>
                  </li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header bg-secondary">
            <a class="collapsed card-link text-white" data-toggle="collapse" href="#systems_apps">
              <strong>Systems and Applications</strong>
            </a>
          </div>
          <div id="systems_apps" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <ul>
                <li>
                  <a href="https://www.eleicoessemfake.dcc.ufmg.br/" target="_blank">
                    <strong>Eleições sem Fake:</strong>
                  </a> Many systems to help with the Fake news problem.
                  <br>
                </li>
                <li>
                  <a href="http://twitter-app.mpi-sws.org/who-makes-trends/" target="_blank">
                    <strong>Who Makes Trends?</strong>
                  </a>: Demographic of Trend Promoters is the distribution (or combination) of demographic groups (such as middle-aged
                  white men, young asian women, adolescent black men) in the crowd promoting (or posting about) a topic
                  <strong>before</strong> the topic becomes Trending on Twitter. Here, we are only considering US based Twitter users
                  whose tweets on the trends appear in the 1% random sample distributed by Twitter.
                  <br>
                </li>
                <li>
                  <a href="http://twitter-app.mpi-sws.org/search-political-bias-of-users/" target="_blank">
                    <strong>Search Political Leaning of Twitter Users</strong>
                  </a>: You can login with your Twitter credentials, to see the political leaning (between democratic and republican)
                  inferred for you. You can also search for other Twitter users and check their political leanings.</li>
                <li>
                  <a href="http://twitter-app.mpi-sws.org/footprint/" target="_blank">
                    <strong>Secondary Digital Footprint</strong>
                  </a>: Twitter is social, people converse with you by mentioning your username in their tweets (e.g., while
                  replying to your tweet or giving a shout-out to you ). These conversations are your secondary digital footprint
                  , even if you delete your account or delete selected tweets, this secondary footprint is not deleted automatically
                  and leaks information about you. Check what your secondary digital footprint reveals about you and your
                  content.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-secondary">
            <a class="collapsed card-link text-white" data-toggle="collapse" href="#awards">
              <strong>Awards</strong>
            </a>
          </div>
          <div id="awards" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <ul class="list-inline">
                <ul>
                  <li>Best paper nominee: CTIC’13, BraSNAM’12</li>
                  <li>Motion of applauses for developing the SmartHome project, during the exchange program Science Without Borders
                    in Budapest - Hungary - Câmara de Mariana/MG Brazil - (November/2014)</li>
                  <li>3rd place in the XXXII Concurso de Trabalhos de Iniciação Científica (CTIC2013), XXXIII Congresso da Sociedade
                    Brasileira de Computação (CSBC2013)</li>
                  <li>Honorable Mention Article Sigam-me os Bons! Transformando robôs em pessoas influentes no Twitter, Brazilian
                    Workshop on Social Network Analysis and Mining (BraSNAM’12)</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-secondary">
            <a class="collapsed card-link text-white" data-toggle="collapse" href="#contact">
              <strong>Contact</strong>
            </a>
          </div>
          <div id="contact" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <address>
                <p>
                  <span class="glyphicon glyphicon-map-marker"></span> Saarbrücken, Saarland, Germany</p>
            
              </address>
              <address>
                <strong>Johnnatan Messias</strong>
                <br> johnme [AT] mpi-sws [DOT] org
              </address>
              <div class="social">
                <div class="container text-center">
                  <a href="http://lattes.cnpq.br/9861859712648217" target="_blank" border="0">
                    <img src="images/lattes.png" alt="Link para Lattes" title="Latte's Curriculum" width="48" height="48" class="logo"> </a>
                  <a href="https://www.linkedin.com/in/johnnatan-messias/" target="_black">
                    <img src="images/linkedin.png" alt="Link para Linkedin" title="Linkedin" width="48" height="48" class="logo"> </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div id="footer">
        <div class="container text-center">
          <p>
            <a href="https://dblp.uni-trier.de/pers/hd/m/Messias:Johnnatan" target="_blank">DBLP</a> |
            <a href="https://scholar.google.com/citations?user=EoGEeFAAAAAJ" target="_blank">Google Scholar</a> |
            <a href="https://www.linkedin.com/in/johnnatan-messias/" target="_blank">LinkedIn</a> |
            <a href="http://lattes.cnpq.br/9861859712648217" target="_blank">Lattes</a> |
            <a href="https://github.com/johnnatan-messias/" target="_blank">GitHub</a>  |
            <a href="bitcoin:1DtCxi6q7KZyxAjsVh3RgW6sYBSGZqzuQ8">BTC</a>
          </p>
        </div>
      </div>
      <?php include_once("util/analyticstracking.php") ?>
    </div>
  </body>
  <footer>
        <p class="text-center">
        <small>&copy; Copyright by Max Planck Institute for Software Systems 2018. All rights reserved. <a href="https://imprint.mpi-klsb.mpg.de/sws/people/johnme">Imprint</a> / <a href="https://data-protection.mpi-klsb.mpg.de/sws/people/johnme">Data Protection</a></small>
        </p>
</footer>
  </html>
