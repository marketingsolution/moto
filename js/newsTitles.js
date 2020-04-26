const context = {
    featured: {
      image: "url('images/4.04.20-bmw-f900xr/BMW_F900_R.jpg')",
      title: 'News from BMW Motorrad F 900 R and F 900 XR',
      body: 'With the new Dynamic Roadster F 900 R and the F 900 XR in the Adventure Sport segment, BMW Motorrad is further expanding its product range for the popular mid-range. Both models offer sporty riding fun, straightforward handling and a unique range of equipment options, packaged to offer attractive value for money. Based on a powerful shared backbone, the two models differ significantly in terms of character and positioning.',
      link: 'bmw-f-900-r-and-f-900-xr.php',
    },
    news: [
      
      {
        title: 'Kawasaki Include Bosch’s Advanced Rider Assistance System',
        date:'13th March 2020',
        image: 'images/12.03.20-bosch-kawasaki/bosch_aras_kawasaki_green.jpg',
        
        lead: 'Kawasaki Heavy Industries, Ltd has announced that the advanced rider assistance system developed by the Bosch company is to be included in future Kawasaki motorcycles - a first for a Japanese motorcycle manufacturer.',
        link: 'kawasaki-first-motorcycle-manufacturet-with-bosch-advanced-rider-assistance-system.php'
      },
      {
        title: 'Nowa Yamaha FJR1300AS i FJR1300AE ultimate edition 2020 r',
        date:'18th February 2020',
        image: 'images/2020_Yamaha_FJR130_0AS_EU-2-min.jpg',
        
        lead: "Yamaha's Sport Touring models are a truly diverse line up of motorcycles from 700cc to 1300cc - each with its own special character and distinct style - the new season's line up opens up endless possibilities on the Roads of Life.",
        link: 'yamaha-2020-sport-touring.php'
      },
      {
        title: 'Honda Africa Twin 2020',
        date:'10th February 2020',
        image: 'images/189388_20YM_Africa_Twin.jpg',
        
        lead: 'A piano welcomed to the 21th century. Pianists celebrate the compact form factor and the diversity of synthesized rhythms all in one masterful musical machine.',
      },
      {
        title: 'Honda NC750X - 2020 what changes?',
        date:'12 January 2020',
        image: 'images/2020_HONDA_NC750X.jpg',
        
        lead: 'Honda’s ultimate commuting motorcycle wears a tough, adventure look and features a torque-laden parallel twin engine, long travel suspension, internal storage compartment, LED lighting and LCD instruments with personalised colour options. ',
        link: '2020-honda-nc750x.php'
      },
     
      
    ]
  };
  const templateElement = document.getElementById('templateHB')
  const templateSource = templateElement.innerHTML
  const template = Handlebars.compile(templateSource);
  const compiledHtml = template(context);
  document.getElementById('news').innerHTML = compiledHtml;
 document.getElementById('news-featured-img').style.backgroundImage = context.featured.image;
