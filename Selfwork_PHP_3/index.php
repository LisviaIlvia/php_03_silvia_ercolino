<?php

// Selfwork PHP 3
// Dati i seguenti array, crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: 
// “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
     'E'
    ],
  'ritrovai',
  'per'
  ],
  'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
   'fine' => '!'
  ];

  // Creo un array aggiuntivo per le parti mancanti del testo
  $words3 = ["Nel", "di cammin di nostra vita", "una selva", "che' la", "via", "smarrita"];

  $result = $words3[0]." ".$words1[6][3][0]." ".$words3[1]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$words3[2]." ".$words1[6][0].", ".$words3[3]." ".$words1[7]." ".$words3[4]." ".$words1[6][1]." ".$words3[5].".";

  echo $result;