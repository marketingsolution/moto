

<?php
$header = file_get_contents('partials/header.html');
echo $header;
?>
         <main>
        
           

        <div class="relative">
            <div class="cover-bg" id="news-bg"></div>
            <div class="h2-home">
                
                <h2>News</h2>
            </div>
        </div>
    

    
  
        <div id="featured-news">
            <div class="flex">

            

            
            <div id="featured-img">
            

            </div>
            <div id="featured-description">
                <h2>Kawasaki to be First Japanese Motorcycle Manufacturer to Include Bosch’s Advanced Rider Assistance System</h2>
                <p>Kawasaki Heavy Industries, Ltd has announced that the advanced rider assistance system developed by the Bosch company is to be included in future Kawasaki motorcycles - a first for a Japanese motorcycle manufacturer.
                </p>
                <a href="/news/kawasaki-first-motorcycle-manufacturet-with-bosch-advanced-rider-assistance-system.php"><button>Enter</button></a>

                

            </div>

             </div>
        
        </div>
        <div id="news-list" class="news-posts-list" >
        
            
            

        </div>
        <button id="view-button" class="button">Load More</button>
        <div class="news-posts-list" id="codey">
            <div class="news-post">
                <div class="news-img"></div>
                    <div class="news-description">
                        <p class="data">12 stycznia 2019</p>
                        <h3>Tytuł newsa h3 Muli, weight 300</h3>
                    </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>background-color: rgba(255, 255, 255, 0.08);</h3>
                </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </h3>
                </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                </div>
            </div>

        </div>
        <button class="button" id='close-button'>Zwiń</button>


  
        <div class="relative">
            <div class="cover-bg" id="moto-test-bg"></div>
            <div class="h2-home">
                
                <h2>Moto Test</h2>
            </div>
        </div>

       

        <div class="clearfix"></dv>

       <div class="flex">
           <div class="moto-test-post">
                <div class="moto-test-img"></div>
                <div class="moto-test-description">
                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                    <p>Moto Test</p>
                </div>

           </div>
           <div class="moto-test-post">
            <div class="moto-test-img"></div>
            <div class="moto-test-description">
                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                <p>Moto Test</p>
            </div>

       </div>
       <div class="moto-test-post">
        <div class="moto-test-img"></div>
        <div class="moto-test-description">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Moto Test</p>
        </div>

   </div>
   <div class="moto-test-post">
    <div class="moto-test-img"></div>
    <div class="moto-test-description">
        <h3>Lorem ipsum dolor sit amet consectetur</h3>
        <p>Moto Test</p>
    </div>

</div>

       </div>


    <div class="relative">
        <div  id="inne-bg" class="cover-bg"></div>
        <div class="h2-home">
            
            <h2>Inne</h2>
        </div>
    </div>


    <div id="contact">
        <h2>Kontakt</h2>
        <p>Jesteś zainteresowany współpracą, chciałbyś, żebyśmy zrecenzowali Twój produkt, motocykl, sprzęt dla motocyklisów lub innego rodzaju produkty związane z turystyką motocyklową? Nasz portal motocyklowy służy pomocą! To świetne miejsce jeżeli chcesz dotrzeć do osób związanych z podobną tematyką, moto testy, prezentacje, recenzje.</p>

        <p>Skorzystaj z poniższego formularza a wkrótce wrócimy z ofertą. Może jesteś fanem motoryzacji i chciałbyś zacząć pisać teksty pod naszą marką? Masz pytania jesteśmy do dyspozycji! Moto Trips portal dla motocyklistów interesujących się turystyką motocyklową.</p>
        <form  action="/index.html" method="POST">
        <label class="pure-material-textfield-outlined">
            <input class="field" type="text" name="username" placeholder=" " minlength="1" maxlength="5" pattern="[a-z]" required>
            <span>Imię</span>
        </label><br>
       
        
<!--maxlenght - nie wyświetla ostrzeżenia ale nie można w formularzu wpisać więcej znaków niż podana tu wartość-->
        <label class="pure-material-textfield-outlined">
            <input class="field" type="text" name="mail" placeholder=" " required>
            <span>e-mail</span>
        </label><br>
        
        <label class="pure-material-textfield-outlined">
            <textarea class="field" type="textarea" name="text" placeholder=" " rows="5" required></textarea>
            <span>Treść pytania</span>
        </label><br>

        <label class="gdpr">
            <input type="checkbox">
            
            <span>Klauzula informacyjna<br>
                Wyrażam zgodę na wykorzystanie podanego przeze mnie adresu e-mail w celu przedstawiania mi pocztą elektroniczną newslettera z informacjami handlowymi, w szczególności o usługach i produktach związanych z pojazdami. <br>
                <span id="toggle" onclick="myFunction()">więcej</span> <div id="myDIV">Twoja zgoda będzie skuteczna do czasu jej cofnięcia. Możesz w dowolnym momencie cofnąć udzieloną zgodę wybierając taką opcję w e-mailu od nas lub informując nas o tym e-mailem na podany poniżej adres albo w ustawieniach konta, jeśli takie posiadasz, bez wpływu na zgodność z prawem przetwarzania dokonanego na podstawie zgody przed jej cofnięciem. Administratorem Twoich danych jest Marketing Solutions Przemysław Gąsiorowski. (ul. Żółwia 14-46, 01-927 Warszawa, Polska, newsletter@moto-trips.pl). Możemy ujawniać Twoje dane podmiotom, z którymi współpracujemy i które przetwarzają te dane w naszym imieniu (odbiorcy danych), prowadzącym działalność z zakresu: marketingu, informatyki, hostingu, statystyki. Udostępnienie nam danych nie jest obowiązkowe, jednak bez ich podania nie będziemy mogli przesyłać Ci newslettera. Masz prawo dostępu do dotyczących Ciebie danych, żądania ich sprostowania, usunięcia lub ograniczenia przetwarzania, przeniesienia ich, a także do skargi do Prezesa Urzędu Ochrony Danych Osobowych</div></span>
         </label><br>

         

        <label for="kilometers">Ile kilometrów przejeżdżasz rocznie?</label><br>
        <span>100 km</span><input id="kilometers" name="kilometers" type="range" min="100" max="10000" step="100"><span>10 000 km</span>
<!--Chechboxy, trzeba pamiętać o połączeniu label z input- for i id - łączą elementy ze sobą, z kolei wszystkie checkboxy mają tą samą name to je grupuje-->
        <section class="toppings">
            <span>What toppings would you like?</span>
            <br>
            <!--Add your code below for the first checkbox-->
  
                      <label for="lettuce">Lettuce</label>
            <!--Add your code below for the second checkbox-->
                      <input id="lettuce" name="topping" type="checkbox" value="lettuce">
            <label for="tomato">Tomato</label>
            <!--Add your code below for the third checkbox-->
  <input id="tomato" type="checkbox" name="topping" value="tomato">
            <label for="majo">Majo</label>
            <input id="majo" type="checkbox" name="topping" value="majo">
          </section>

          <section class="typ-motocykla">
            <label for="typ-motocykla">Jakim typem motocykla jeździsz?</label>
  <!--informacja z formularza jest wysyłana za pomocą atrybutu "name", co zaznaczył będzie widoczne tak: "typ=turystyk"-->
            <select name="typ" id="typ-motocykla">
                <option value="naked">Naked</option>
                <option value="scigacz">Ścigacz</option>
                <option value="turystyk">Turystyk</option>
                <option value="chopper">Chopper</option>
            </select>
            
  
        </section>
   <!--datalist lista którą możesz zacząć pisać z palca i wyświetla wstępnie zdefiniowalne podpowiedzi-->     
        <section class="marka-motocykla">

                <label for="marka">Jaką marką motocykla jeździsz?</label>
                <input type="text" list="marki" id="marka" name="marka">
              
                <datalist id="marki">
                  <option value="BMW"></option>
                  <option value="Honda"></option>
                  <option value="Yamaha"></option>
                  <option value="Triumph"></option>
                  <option value="KTM"></option>
                  <option value="Inna"></option>  
                </datalist>

        </section>
        <br>
        <input type="submit" id="submission" value="Submit">
        </form>

    </div>  
    

    
   
    
</main>
<script src="js/handlebars.min.js"></script>
        <script id='templateHB' type='text/x-handlebars-template'>
            {{#each news}}
            <a class="news-link" href="/news/{{this.link}}">
            <div class="news-post">
                <img class="news-img" src="{{this.image}}"/>
                <div class="news-description">
                    <div class="data">
                        <p>{{this.date}}</p>
                    </div>
                        <h3>{{this.title}}</h3>
                </div>
            </div>
            </a>
                {{/each}}

               
        </script>
<script src="js/newsTitles.js" type="text/javascript"></script>  
</body>


</HTML>

