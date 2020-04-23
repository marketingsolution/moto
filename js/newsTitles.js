const context = {
    title: 'Welcome to Musicon',
    body: 'Musicon is a budding musical storefront with a mission to share the joy of music. These magnificent auditory tools are designed with musical creators, like you, in mind. Hobbyists, beginners, and experts alike can appreciate the resplendent sounds supplied by each and every instrument we carry. Join us in delivering the euphoric vibrations of melodia to the citizens of the world!',
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
        
        lead: 'A piano welcomed to the 21th century. Pianists celebrate the compact form factor and the diversity of synthesized rhythms all in one masterful musical machine.',
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
        
        lead: 'A piano welcomed to the 21th century. Pianists celebrate the compact form factor and the diversity of synthesized rhythms all in one masterful musical machine.',
      },
     
      
    ]
  };
  const templateElement = document.getElementById('templateHB')
  const templateSource = templateElement.innerHTML
  const template = Handlebars.compile(templateSource);
  const compiledHtml = template(context);
  document.getElementById('news-list').innerHTML = compiledHtml;