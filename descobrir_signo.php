<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu signo chinês</title>
    <style>

       body { 
              background-color: black;
              background-image: url(imagens/pexels-pixabay-2150.jpg);
              background-repeat: no-repeat;
              background-size: auto;
              background-position: bottom;
              margin: 40vh;
       }

       h1 {
            text-align: center;  
            color: white;

       }
       form {
              text-align: center;
       }

       form > label {
              color: white;
       }
       
       p {
              font-family: 'Times New Roman', Times, serif;
              font-size: 20px;
              text-align: center;
              color: white;
       }
    </style>

</head>
<body>
    <h1>Descubra seu signo chinês</h1>
    <form action="descobrir_signo.php" method="POST">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento">
        <input type="submit" value="Descobrir">
    </form>
 <br>
    <?php 
    
    $_descobrir_signos = array("Rato", "Boi", "Tigre", "Coelho", "Dragão", "Serpente", "Cavalo", "Carneiro", "Macaco", "Galo", "Cão", "Porco");

$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';

   if (!empty($data_nascimento)){

    if (($data_nascimento >= '1900-01-31' && $data_nascimento <= '1901-02-18') ||
        ($data_nascimento >= '1912-02-18' && $data_nascimento <= '1913-02-05') ||
        ($data_nascimento >= '1924-02-05' && $data_nascimento <= '1925-01-24') ||
        ($data_nascimento >= '1936-01-24' && $data_nascimento <= '1937-02-10') ||
        ($data_nascimento >= '1948-02-10' && $data_nascimento <= '1949-01-28') ||
        ($data_nascimento >= '1960-01-28' && $data_nascimento <= '1961-02-14') ||
        ($data_nascimento >= '1972-02-15' && $data_nascimento <= '1973-02-02') ||
        ($data_nascimento >= '1984-02-02' && $data_nascimento <= '1985-02-19') ||
        ($data_nascimento >= '1996-02-19' && $data_nascimento <= '1997-02-06') ||
        ($data_nascimento >= '2008-02-07' && $data_nascimento <= '2009-01-25') ||
        ($data_nascimento >= '2020-01-25' && $data_nascimento <= '2021-02-11')
    ) 
    {
        echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[0] . ":" . "<br>" . "Inteligente, adaptável, charmoso e ambicioso.</p>";
    } 
    elseif (($data_nascimento >= '1901-02-19' && $data_nascimento <= '1902-02-07') ||
            ($data_nascimento >= '1913-02-06' && $data_nascimento <= '1914-01-25') ||
            ($data_nascimento >= '1925-01-25' && $data_nascimento <= '1926-02-12') ||
            ($data_nascimento >= '1937-02-11' && $data_nascimento <= '1938-01-30') ||
            ($data_nascimento >= '1949-01-29' && $data_nascimento <= '1950-02-16') ||
            ($data_nascimento >= '1961-02-15' && $data_nascimento <= '1962-02-04') ||
            ($data_nascimento >= '1973-02-03' && $data_nascimento <= '1974-01-22') ||
            ($data_nascimento >= '1985-02-20' && $data_nascimento <= '1986-02-08') ||
            ($data_nascimento >= '1997-02-07' && $data_nascimento <= '1998-01-27') ||
            ($data_nascimento >= '2009-01-26' && $data_nascimento <= '2010-02-13') ||($data_nascimento >= '2021-02-12' && $data_nascimento <= '2022-01-31'))
            {
              echo "Seu signo no Horóscopo Chinês é " . $_descobrir_signos[1] . ":" . "<br>" . "<p>Confiável, trabalhador, determinado e leal.</p>"; 
            } 

       elseif (($data_nascimento >= '1902-02-08' && $data_nascimento <= '1903-02-28') ||
               ($data_nascimento >= '1914-01-26' && $data_nascimento <= '1915-02-13') ||
               ($data_nascimento >= '1926-02-13' && $data_nascimento <= '1927-02-01') ||
               ($data_nascimento >= '1938-01-31' && $data_nascimento <= '1939-02-18') ||
               ($data_nascimento >= '1950-02-17' && $data_nascimento <= '1951-02-05') ||
               ($data_nascimento >= '1962-02-05' && $data_nascimento <= '1963-01-24') ||
               ($data_nascimento >= '1974-01-23' && $data_nascimento <= '1975-02-10') ||
               ($data_nascimento >= '1986-02-09' && $data_nascimento <= '1987-01-28') ||
               ($data_nascimento >= '1998-01-28' && $data_nascimento <= '1999-02-15') ||
               ($data_nascimento >= '2010-02-14' && $data_nascimento <= '2011-02-02') ||
               ($data_nascimento >= '2022-02-01' && $data_nascimento <= '2023-01-21'))
 {
    echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[2] . ":" . "<br>" .
    "Corajoso, impulsivo, competitivo e independente.</p>";
}
     elseif (($data_nascimento >= '1903-01-29' && $data_nascimento <= '1904-02-15') ||
             ($data_nascimento >= '1915-02-14' && $data_nascimento <= '1916-02-02') ||
             ($data_nascimento >= '1927-02-02' && $data_nascimento <= '1928-01-22') ||
             ($data_nascimento >= '1939-02-19' && $data_nascimento <= '1940-02-07') ||
             ($data_nascimento >= '1951-02-06' && $data_nascimento <= '1952-01-26') ||
             ($data_nascimento >= '1963-01-25' && $data_nascimento <= '1964-02-12') ||
             ($data_nascimento >= '1975-02-11' && $data_nascimento <= '1976-01-30') ||
             ($data_nascimento >= '1987-01-29' && $data_nascimento <= '1988-02-16') ||
             ($data_nascimento >= '1999-02-16' && $data_nascimento <= '2000-02-04') ||
             ($data_nascimento >= '2011-02-03' && $data_nascimento <= '2012-01-22') ||
             ($data_nascimento >= '2023-01-22' && $data_nascimento <= '2024-02-09'))

{
    echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[3] . ":" . "<br>" . "Gentil, intuitivo, gracioso e conservador.</p>";
}   

    elseif(($data_nascimento >= '1904-02-16' && $data_nascimento <= '1905-02-03')||
           ($data_nascimento >= '1916-02-03' && $data_nascimento <= '1917-01-22')||
           ($data_nascimento >= '1928-01-23' && $data_nascimento <= '1929-02-09')||
           ($data_nascimento >= '1940-02-08' && $data_nascimento <= '1941-01-26')||
           ($data_nascimento >= '1952-01-27' && $data_nascimento <= '1953-02-13')||
           ($data_nascimento >= '1964-02-13' && $data_nascimento <= '1965-02-01')||
           ($data_nascimento >= '1976-01-31' && $data_nascimento <= '1977-02-17')||
           ($data_nascimento >= '1988-02-17' && $data_nascimento <= '1989-02-05')||
           ($data_nascimento >= '2000-02-05' && $data_nascimento <= '2001-01-24')||
           ($data_nascimento >= '2012-01-23' && $data_nascimento <= '2013-02-09')||
           ($data_nascimento >= '2024-02-10' && $data_nascimento <= '2025-01-28'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[4] . ":" . "<br>" . "Carismático, energético, poderoso e cheio de vida.</p>";
           }  


    elseif(($data_nascimento >= '1905-02-04' && $data_nascimento <= '1906-01-24')||
           ($data_nascimento >= '1917-01-23' && $data_nascimento <= '1918-02-10')||
           ($data_nascimento >= '1929-02-10' && $data_nascimento <= '1930-01-29')||
           ($data_nascimento >= '1941-01-27' && $data_nascimento <= '1942-02-14')||
           ($data_nascimento >= '1953-02-14' && $data_nascimento <= '1954-02-02')||
           ($data_nascimento >= '1965-02-02' && $data_nascimento <= '1966-01-20')||
           ($data_nascimento >= '1977-02-18' && $data_nascimento <= '1978-02-06')||
           ($data_nascimento >= '1989-02-06' && $data_nascimento <= '1990-01-26')||
           ($data_nascimento >= '2001-01-25' && $data_nascimento <= '2002-02-11')||
           ($data_nascimento >= '2013-02-10' && $data_nascimento <= '2014-01-30'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[5] . ":" . "<br>" . "Misterioso, sábio, elegante e intuitivo.</p>";
           }

    elseif(($data_nascimento >= '1906-01-25' && $data_nascimento <= '1907-02-12')||
           ($data_nascimento >= '1918-02-11' && $data_nascimento <= '1919-01-31')||
           ($data_nascimento >= '1930-01-30' && $data_nascimento <= '1931-02-16')||
           ($data_nascimento >= '1942-02-15' && $data_nascimento <= '1943-02-04')||
           ($data_nascimento >= '1954-02-03' && $data_nascimento <= '1955-01-23')||
           ($data_nascimento >= '1966-01-21' && $data_nascimento <= '1967-02-08')||
           ($data_nascimento >= '1978-02-07' && $data_nascimento <= '1979-01-27')||
           ($data_nascimento >= '1990-01-27' && $data_nascimento <= '1991-02-14')||
           ($data_nascimento >= '2002-02-12' && $data_nascimento <= '2003-01-31')||
           ($data_nascimento >= '2014-01-31' && $data_nascimento <= '2015-02-18'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[6] . ":" . "<br>" . "Enérgico, aventureiro, leal e comunicativo</p>";
                        
           }

    elseif(($data_nascimento >= '1907-02-13' && $data_nascimento <= '1908-02-01')||
           ($data_nascimento >= '1919-02-01' && $data_nascimento <= '1920-02-19')||
           ($data_nascimento >= '1931-02-17' && $data_nascimento <= '1932-02-05')||
           ($data_nascimento >= '1943-02-05' && $data_nascimento <= '1944-01-24')||
           ($data_nascimento >= '1955-01-24' && $data_nascimento <= '1956-02-11')||
           ($data_nascimento >= '1967-02-09' && $data_nascimento <= '1968-01-29')||
           ($data_nascimento >= '1979-01-28' && $data_nascimento <= '1980-02-15')||
           ($data_nascimento >= '1991-02-15' && $data_nascimento <= '1992-02-03')||
           ($data_nascimento >= '2003-02-01' && $data_nascimento <= '2004-01-21')||
           ($data_nascimento >= '2015-02-19' && $data_nascimento <= '2016-02-07'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[7] . ":" . "<br>" . "Compassiva, criativa, gentil e amigável.</p>";
           }

    elseif(($data_nascimento >= '1908-02-02' && $data_nascimento <= '1909-01-21')||
           ($data_nascimento >= '1920-02-20' && $data_nascimento <= '1921-01-07')||
           ($data_nascimento >= '1932-02-06' && $data_nascimento <= '1933-01-25')||
           ($data_nascimento >= '1944-01-25' && $data_nascimento <= '1945-02-12')||
           ($data_nascimento >= '1956-02-12' && $data_nascimento <= '1957-01-30')||
           ($data_nascimento >= '1968-01-30' && $data_nascimento <= '1969-02-16')||
           ($data_nascimento >= '1980-02-16' && $data_nascimento <= '1981-02-04')||
           ($data_nascimento >= '1992-02-04' && $data_nascimento <= '1993-01-22')||
           ($data_nascimento >= '2004-01-22' && $data_nascimento <= '2005-02-08')||
           ($data_nascimento >= '2016-02-08' && $data_nascimento <= '2017-01-27'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[8] . ":" . "<br>" . "Inteligente, esperto, divertido e versátil.</p>";
           }

    elseif(($data_nascimento >= '1910-02-10' && $data_nascimento <= '1911-01-29')||
           ($data_nascimento >= '1922-01-28' && $data_nascimento <= '1923-02-15')||
           ($data_nascimento >= '1934-02-15' && $data_nascimento <= '1935-02-03')||
           ($data_nascimento >= '1946-02-02' && $data_nascimento <= '1947-01-21')||
           ($data_nascimento >= '1958-02-18' && $data_nascimento <= '1959-02-07')||
           ($data_nascimento >= '1970-02-06' && $data_nascimento <= '1971-01-26')||
           ($data_nascimento >= '1982-01-25' && $data_nascimento <= '1983-02-12')||
           ($data_nascimento >= '1994-02-10' && $data_nascimento <= '1995-01-30')||
           ($data_nascimento >= '2006-01-29' && $data_nascimento <= '2007-02-17')||
           ($data_nascimento >= '2018-02-19' && $data_nascimento <= '2019-02-04'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[9] . ":" . "<br>" . "Honesto, trabalhador, corajoso e observador.</p>";
           }

    elseif(($data_nascimento >= '1909-01-22' && $data_nascimento <= '1910-02-09')||
           ($data_nascimento >= '1921-02-08' && $data_nascimento <= '1922-01-27')||
           ($data_nascimento >= '1933-01-26' && $data_nascimento <= '1934-02-14')||
           ($data_nascimento >= '1945-02-13' && $data_nascimento <= '1946-02-01')||
           ($data_nascimento >= '1957-01-31' && $data_nascimento <= '1958-02-17')||
           ($data_nascimento >= '1969-02-17' && $data_nascimento <= '1970-02-05')||
           ($data_nascimento >= '1981-02-05' && $data_nascimento <= '1982-01-24')||
           ($data_nascimento >= '1993-01-23' && $data_nascimento <= '1994-02-09')||
           ($data_nascimento >= '2005-02-09' && $data_nascimento <= '2006-01-28')||
           ($data_nascimento >= '2017-01-28' && $data_nascimento <= '2018-02-18'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é " . $_descobrir_signos[10] . ":" . "<br>" . "Leal, protetor, fiel e justo </p>.";
           }

    elseif(($data_nascimento >= '1911-01-30' && $data_nascimento <= '1912-02-17')||
           ($data_nascimento >= '1923-02-16' && $data_nascimento <= '1924-02-04')||
           ($data_nascimento >= '1935-02-04' && $data_nascimento <= '1936-01-23')||
           ($data_nascimento >= '1947-01-22' && $data_nascimento <= '1948-02-09')||
           ($data_nascimento >= '1959-02-08' && $data_nascimento <= '1960-01-27')||
           ($data_nascimento >= '1971-01-27' && $data_nascimento <= '1972-02-14')||
           ($data_nascimento >= '1983-02-13' && $data_nascimento <= '1984-02-01')||
           ($data_nascimento >= '1995-01-31' && $data_nascimento <= '1996-02-18')||
           ($data_nascimento >= '2007-02-18' && $data_nascimento <= '2008-02-06')||
           ($data_nascimento >= '2019-02-05' && $data_nascimento <= '2020-01-24'))

           {
            echo "<p>Seu signo no Horóscopo Chinês é  " . $_descobrir_signos[11] . ":" . "<br>" . "Generoso, tolerante, sincero e tranquilo.</p>";
           }

           
    else {
    echo "Data de nascimento inválida.";
}
}
?>
         
</body>
</html>

