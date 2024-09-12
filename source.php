<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <title>C - Язык Программирования</title>
  <style><?php include 'styles.css'; ?></style>
  <script type="text/javascript"
    src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
  </script>
</head>

<body>
  <header><h1>C - Язык Программирования</h1></header>
  
  <div id="main-wrapper">
    <div id="navigation">        
      <nav aria-labelledby="table-of-contents">
        <h2 id="table-of-contents">Содержание</h2>
        <ul>          
        <li><a href="#1">1. Введение</a>
            <ul>
              <li><a href="#1.1">1.1. Об этом курсе</a>
                <ul>
                  <li><a href="#1.1.1">1.1.1</a></li>
                </ul>
              </li>
              <li><a href="#1.2">1.2. О чём нужно знать</a>
                <ul>
                  <li><a href="#1.2.1">1.2.1</a></li>
                  <li><a href="#1.2.2">1.2.2</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#2">2. Вид сверху на C</a>
            <ul>
              <li><a href="#2.1">2.1. Введение</a>
                <ul>
                  <li><a href="#2.1.1">2.1.1</a></li>
                  <li><a href="#2.1.2">2.1.2</a></li>
                  <li><a href="#2.1.3">2.1.3</a></li>
                  <li><a href="#2.1.4">2.1.4</a></li>
                  <li><a href="#2.1.5">2.1.5</a></li>
                  <li><a href="#2.1.6">2.1.6</a></li>
                  <li><a href="#2.1.7">2.1.7</a></li>
                  <li><a href="#2.1.8">2.1.8</a></li>
                </ul>
              </li>
              <li><a href="#2.2">2.2. Контроль потока</a>
                <ul>
                  <li><a href="#2.2.1">2.2.1</a></li>
                  <li><a href="#2.2.2">2.2.2</a></li>
                  <li><a href="#2.2.3">2.2.3</a></li>
                  <li><a href="#2.2.4">2.2.4</a></li>
                  <li><a href="#2.2.5">2.2.5</a></li>
                  <li><a href="#2.2.6">2.2.6</a></li>
                  <li><a href="#2.2.7">2.2.7</a></li>
                  <li><a href="#2.2.8">2.2.8</a></li>
                  <li><a href="#2.2.9">2.2.9</a></li>
                  <li><a href="#2.2.10">2.2.10</a></li>
                </ul>
              </li>
              <li><a href="#2.3">2.3. Функции</a>
                <ul>
                  <li><a href="#2.3.1">2.3.1</a></li>
                  <li><a href="#2.3.2">2.3.2</a></li>
                  <li><a href="#2.3.3">2.3.3</a></li>
                  <li><a href="#2.3.4">2.3.4</a></li>
                  <li><a href="#2.3.5">2.3.5</a></li>
                  <li><a href="#2.3.6">2.3.6</a></li>
                  <li><a href="#2.3.7">2.3.7</a></li>
                </ul>
              </li>
              <li><a href="#2.4">2.4. Указатели</a>
                <ul>
                  <li><a href="#2.4.1">2.4.1</a></li>
                  <li><a href="#2.4.2">2.4.2</a></li>
                  <li><a href="#2.4.3">2.4.3</a></li>
                  <li><a href="#2.4.4">2.4.4</a></li>
                  <li><a href="#2.4.5">2.4.5</a></li>
                  <li><a href="#2.4.6">2.4.6</a></li>
                  <li><a href="#2.4.7">2.4.7</a></li>
                  <li><a href="#2.4.8">2.4.8</a></li>
                  <li><a href="#2.4.9">2.4.9</a></li>
                  <li><a href="#2.4.10">2.4.10</a></li>
                  <li><a href="#2.4.11">2.4.11</a></li>
                </ul>
              </li>
              <li><a href="#2.5">2.5. Строки</a>
                <ul>
                  <li><a href="#2.5.1">2.5.1</a></li>
                  <li><a href="#2.5.2">2.5.2</a></li>
                  <li><a href="#2.5.3">2.5.3</a></li>
                  <li><a href="#2.5.4">2.5.4</a></li>
                  <li><a href="#2.5.5">2.5.5</a></li>
                  <li><a href="#2.5.6">2.5.6</a></li>
                  <li><a href="#2.5.7">2.5.7</a></li>
                  <li><a href="#2.5.8">2.5.8</a></li>
                </ul>
              </li>
              <li><a href="#2.6">2.6. Структуры</a>
                <ul>
                  <li><a href="#2.6.1">2.6.1</a></li>
                  <li><a href="#2.6.2">2.6.2</a></li>
                  <li><a href="#2.6.3">2.6.3</a></li>
                  <li><a href="#2.6.4">2.6.4</a></li>
                  <li><a href="#2.6.5">2.6.5</a></li>
                  <li><a href="#2.6.6">2.6.6</a></li>
                  <li><a href="#2.6.7">2.6.7</a></li>
                  <li><a href="#2.6.8">2.6.8</a></li>
                </ul>
              </li>
              <li><a href="#2.7">2.7. Функции высшего порядка, макросы, шаблоны</a>
                <ul>
                  <li><a href="#2.7.1">2.7.1</a></li>
                  <li><a href="#2.7.2">2.7.2</a></li>
                  <li><a href="#2.7.3">2.7.3</a></li>
                  <li><a href="#2.7.4">2.7.4</a></li>
                  <li><a href="#2.7.5">2.7.5</a></li>
                  <li><a href="#2.7.6">2.7.6</a></li>
                  <li><a href="#2.7.7">2.7.7</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#3">3. Компиляция, gcc</a>
            <ul>
              <li><a href="#3.1">3.1. Фазы компиляции</a>
                <ul>
                  <li><a href="#3.1.1">3.1.1</a></li>
                  <li><a href="#3.1.2">3.1.2</a></li>
                  <li><a href="#3.1.3">3.1.3</a></li>
                  <li><a href="#3.1.4">3.1.4</a></li>
                  <li><a href="#3.1.5">3.1.5</a></li>
                  <li><a href="#3.1.6">3.1.6</a></li>
                </ul>
              </li>
              <li><a href="#3.2">3.2. Многомодульные программы</a>
                <ul>
                  <li><a href="#3.2.1">3.2.1</a></li>
                  <li><a href="#3.2.2">3.2.2</a></li>
                  <li><a href="#3.2.3">3.2.3</a></li>
                  <li><a href="#3.2.4">3.2.4</a></li>
                  <li><a href="#3.2.5">3.2.5</a></li>
                  <li><a href="#3.2.6">3.2.6</a></li>
                </ul>
              </li>
              <li><a href="#3.3">3.3. GNU make</a>
                <ul>
                  <li><a href="#3.3.1">3.3.1</a></li>
                  <li><a href="#3.3.2">3.3.2</a></li>
                  <li><a href="#3.3.3">3.3.3</a></li>
                  <li><a href="#3.3.4">3.3.4</a></li>
                  <li><a href="#3.3.5">3.3.5</a></li>
                  <li><a href="#3.3.6">3.3.6</a></li>
                  <li><a href="#3.3.7">3.3.7</a></li>
                  <li><a href="#3.3.8">3.3.8</a></li>
                  <li><a href="#3.3.9">3.3.9</a></li>
                </ul>
              </li>
            </ul>
            <li><a href="#4">4. Unix</a>
            <ul>
              <li><a href="#4.1">4.1. Shell</a>
                <ul>
                  <li><a href="#4.1.1">4.1.1</a></li>
                  <li><a href="#4.1.2">4.1.2</a></li>
                  <li><a href="#4.1.3">4.1.3</a></li>
                  <li><a href="#4.1.4">4.1.4</a></li>
                  <li><a href="#4.1.5">4.1.5</a></li>
                  <li><a href="#4.1.6">4.1.6</a></li>
                  <li><a href="#4.1.7">4.1.7</a></li>
                  <li><a href="#4.1.8">4.1.8</a></li>
                  <li><a href="#4.1.9">4.1.9</a></li>
                  <li><a href="#4.1.10">4.1.10</a></li>
                </ul>
              </li>
              <li><a href="#4.2">4.2. Системные вызовы</a>
                <ul>
                  <li><a href="#4.2.1">4.2.1</a></li>
                  <li><a href="#4.2.2">4.2.2</a></li>
                  <li><a href="#4.2.3">4.2.3</a></li>
                  <li><a href="#4.2.4">4.2.4</a></li>
                  <li><a href="#4.2.5">4.2.5</a></li>
                  <li><a href="#4.2.6">4.2.6</a></li>
                  <li><a href="#4.2.7">4.2.7</a></li>
                  <li><a href="#4.2.8">4.2.8</a></li>
                  <li><a href="#4.2.9">4.2.9</a></li>
                  <li><a href="#4.2.10">4.2.10</a></li>
                  <li><a href="#4.2.11">4.2.11</a></li>
                </ul>
              </li>
              <li><a href="#4.3">4.3. Файловая система</a>
                <ul>
                  <li><a href="#4.3.1">4.3.1</a></li>
                  <li><a href="#4.3.2">4.3.2</a></li>
                  <li><a href="#4.3.3">4.3.3</a></li>
                  <li><a href="#4.3.4">4.3.4</a></li>
                  <li><a href="#4.3.5">4.3.5</a></li>
                  <li><a href="#4.3.6">4.3.6</a></li>
                  <li><a href="#4.3.7">4.3.7</a></li>
                  <li><a href="#4.3.8">4.3.8</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <div id="contents-wrapper">
      <main id="contents">

<h2 id="1">1. Введение</h2>

<h3 id="1.1">1.1. Об этом курсе</h3>
<h3 id="1.1.1">1.1.1</h2><?php include '1/1/1'; ?>

<h3 id="1.2">1.2. О чём нужно знать</h3>
<h3 id="1.2.1">1.2.1</h2><?php include '1/2/1'; ?>
<h3 id="1.2.2">1.2.2</h2><?php include '1/2/2'; ?>

<h2 id="2">2. Вид сверху на C</h2>

<h3 id="2.1">2.1. Введение</h3>
<h3 id="2.1.1">2.1.1</h2><?php include '2/1/1'; ?>
<h3 id="2.1.2">2.1.2</h2><?php include '2/1/2'; ?>
<h3 id="2.1.3">2.1.3</h2><?php include '2/1/3'; ?>
<h3 id="2.1.4">2.1.4</h2><?php include '2/1/4'; ?>
<h3 id="2.1.5">2.1.5</h2><?php include '2/1/5'; ?>
<h3 id="2.1.6">2.1.6</h2><?php include '2/1/6'; ?>
<h3 id="2.1.7">2.1.7</h2><?php include '2/1/7'; ?>
<h3 id="2.1.8">2.1.8</h2><?php include '2/1/8'; ?>

<h3 id="2.2">2.2. Контроль потока</h3>
<h3 id="2.2.1">2.2.1</h2><?php include '2/2/1'; ?>
<h3 id="2.2.2">2.2.2</h2><?php include '2/2/2'; ?>
<h3 id="2.2.3">2.2.3</h2><?php include '2/2/3'; ?>
<h3 id="2.2.4">2.2.4</h2><?php include '2/2/4'; ?>
<h3 id="2.2.5">2.2.5</h2><?php include '2/2/5'; ?>
<h3 id="2.2.6">2.2.6</h2><?php include '2/2/6'; ?>
<h3 id="2.2.7">2.2.7</h2><?php include '2/2/7'; ?>
<h3 id="2.2.8">2.2.8</h2><?php include '2/2/8'; ?>
<h3 id="2.2.9">2.2.9</h2><?php include '2/2/9'; ?>
<h3 id="2.2.10">2.2.10</h2><?php include '2/2/10'; ?>

<h3 id="2.3">2.3. Функции</h3>
<h3 id="2.3.1">2.3.1</h2><?php include '2/3/1'; ?>
<h3 id="2.3.2">2.3.2</h2><?php include '2/3/2'; ?>
<h3 id="2.3.3">2.3.3</h2><?php include '2/3/3'; ?>
<h3 id="2.3.4">2.3.4</h2><?php include '2/3/4'; ?>
<h3 id="2.3.5">2.3.5</h2><?php include '2/3/5'; ?>
<h3 id="2.3.6">2.3.6</h2><?php include '2/3/6'; ?>
<h3 id="2.3.7">2.3.7</h2><?php include '2/3/7'; ?>

<h3 id="2.4">2.4. Указатели</h3>
<h3 id="2.4.1">2.4.1</h2><?php include '2/4/1'; ?>
<h3 id="2.4.2">2.4.2</h2><?php include '2/4/2'; ?>
<h3 id="2.4.3">2.4.3</h2><?php include '2/4/3'; ?>
<h3 id="2.4.4">2.4.4</h2><?php include '2/4/4'; ?>
<h3 id="2.4.5">2.4.5</h2><?php include '2/4/5'; ?>
<h3 id="2.4.6">2.4.6</h2><?php include '2/4/6'; ?>
<h3 id="2.4.7">2.4.7</h2><?php include '2/4/7'; ?>
<h3 id="2.4.8">2.4.8</h2><?php include '2/4/8'; ?>
<h3 id="2.4.9">2.4.9</h2><?php include '2/4/9'; ?>
<h3 id="2.4.10">2.4.10</h2><?php include '2/4/10'; ?>
<h3 id="2.4.11">2.4.11</h2><?php include '2/4/11'; ?>

<h3 id="2.5">2.5. Строки</h3>
<h3 id="2.5.1">2.5.1</h2><?php include '2/5/1'; ?>
<h3 id="2.5.2">2.5.2</h2><?php include '2/5/2'; ?>
<h3 id="2.5.3">2.5.3</h2><?php include '2/5/3'; ?>
<h3 id="2.5.4">2.5.4</h2><?php include '2/5/4'; ?>
<h3 id="2.5.5">2.5.5</h2><?php include '2/5/5'; ?>
<h3 id="2.5.6">2.5.6</h2><?php include '2/5/6'; ?>
<h3 id="2.5.7">2.5.7</h2><?php include '2/5/7'; ?>
<h3 id="2.5.8">2.5.8</h2><?php include '2/5/8'; ?>

<h3 id="2.6">2.6. Структуры</h3>
<h3 id="2.6.1">2.6.1</h2><?php include '2/6/1'; ?>
<h3 id="2.6.2">2.6.2</h2><?php include '2/6/2'; ?>
<h3 id="2.6.3">2.6.3</h2><?php include '2/6/3'; ?>
<h3 id="2.6.4">2.6.4</h2><?php include '2/6/4'; ?>
<h3 id="2.6.5">2.6.5</h2><?php include '2/6/5'; ?>
<h3 id="2.6.6">2.6.6</h2><?php include '2/6/6'; ?>
<h3 id="2.6.7">2.6.7</h2><?php include '2/6/7'; ?>
<h3 id="2.6.8">2.6.8</h2><?php include '2/6/8'; ?>

<h3 id="2.7">2.7. Функции высшего порядка, макросы, шаблоны</h3>
<h3 id="2.7.1">2.7.1</h2><?php include '2/7/1'; ?>
<h3 id="2.7.2">2.7.2</h2><?php include '2/7/2'; ?>
<h3 id="2.7.3">2.7.3</h2><?php include '2/7/3'; ?>
<h3 id="2.7.4">2.7.4</h2><?php include '2/7/4'; ?>
<h3 id="2.7.5">2.7.5</h2><?php include '2/7/5'; ?>
<h3 id="2.7.6">2.7.6</h2><?php include '2/7/6'; ?>
<h3 id="2.7.7">2.7.7</h2><?php include '2/7/7'; ?>

<h2 id="3">3. Компиляция, gcc</h2>

<h3 id="3.1">3.1. Фазы компиляции</h3>
<h3 id="3.1.1">3.1.1</h2><?php include '3/1/1'; ?>
<h3 id="3.1.2">3.1.2</h2><?php include '3/1/2'; ?>
<h3 id="3.1.3">3.1.3</h2><?php include '3/1/3'; ?>
<h3 id="3.1.4">3.1.4</h2><?php include '3/1/4'; ?>
<h3 id="3.1.5">3.1.5</h2><?php include '3/1/5'; ?>
<h3 id="3.1.6">3.1.6</h2><?php include '3/1/6'; ?>

<h3 id="3.2">3.2. Многомодульные программы</h3>
<h3 id="3.2.1">3.2.1</h2><?php include '3/2/1'; ?>
<h3 id="3.2.2">3.2.2</h2><?php include '3/2/2'; ?>
<h3 id="3.2.3">3.2.3</h2><?php include '3/2/3'; ?>
<h3 id="3.2.4">3.2.4</h2><?php include '3/2/4'; ?>
<h3 id="3.2.5">3.2.5</h2><?php include '3/2/5'; ?>
<h3 id="3.2.6">3.2.6</h2><?php include '3/2/6'; ?>

<h3 id="3.3">3.3. GNU make</h3>
<h3 id="3.3.1">3.3.1</h2><?php include '3/3/1'; ?>
<h3 id="3.3.2">3.3.2</h2><?php include '3/3/2'; ?>
<h3 id="3.3.3">3.3.3</h2><?php include '3/3/3'; ?>
<h3 id="3.3.4">3.3.4</h2><?php include '3/3/4'; ?>
<h3 id="3.3.5">3.3.5</h2><?php include '3/3/5'; ?>
<h3 id="3.3.6">3.3.6</h2><?php include '3/3/6'; ?>
<h3 id="3.3.7">3.3.7</h2><?php include '3/3/7'; ?>
<h3 id="3.3.8">3.3.8</h2><?php include '3/3/8'; ?>
<h3 id="3.3.9">3.3.9</h2><?php include '3/3/9'; ?>

<h2 id="4">4. Unix</h2>

<h3 id="4.1">4.1. Shell</h3>
<h3 id="4.1.1">4.1.1</h2><?php include '4/1/1'; ?>
<h3 id="4.1.2">4.1.2</h2><?php include '4/1/2'; ?>
<h3 id="4.1.3">4.1.3</h2><?php include '4/1/3'; ?>
<h3 id="4.1.4">4.1.4</h2><?php include '4/1/4'; ?>
<h3 id="4.1.5">4.1.5</h2><?php include '4/1/5'; ?>
<h3 id="4.1.6">4.1.6</h2><?php include '4/1/6'; ?>
<h3 id="4.1.7">4.1.7</h2><?php include '4/1/7'; ?>
<h3 id="4.1.8">4.1.8</h2><?php include '4/1/8'; ?>
<h3 id="4.1.9">4.1.9</h2><?php include '4/1/9'; ?>
<h3 id="4.1.10">4.1.10</h2><?php include '4/1/10'; ?>

<h3 id="4.2">4.2. Системные вызовы</h3>
<h3 id="4.2.1">4.2.1</h2><?php include '4/2/1'; ?>
<h3 id="4.2.2">4.2.2</h2><?php include '4/2/2'; ?>
<h3 id="4.2.3">4.2.3</h2><?php include '4/2/3'; ?>
<h3 id="4.2.4">4.2.4</h2><?php include '4/2/4'; ?>
<h3 id="4.2.5">4.2.5</h2><?php include '4/2/5'; ?>
<h3 id="4.2.6">4.2.6</h2><?php include '4/2/6'; ?>
<h3 id="4.2.7">4.2.7</h2><?php include '4/2/7'; ?>
<h3 id="4.2.8">4.2.8</h2><?php include '4/2/8'; ?>
<h3 id="4.2.9">4.2.9</h2><?php include '4/2/9'; ?>
<h3 id="4.2.10">4.2.10</h2><?php include '4/2/10'; ?>
<h3 id="4.2.11">4.2.11</h2><?php include '4/2/11'; ?>

<h3 id="4.3">4.3. Файловая система</h3>
<h3 id="4.3.1">4.3.1</h2><?php include '4/3/1'; ?>
<h3 id="4.3.2">4.3.2</h2><?php include '4/3/2'; ?>
<h3 id="4.3.3">4.3.3</h2><?php include '4/3/3'; ?>
<h3 id="4.3.4">4.3.4</h2><?php include '4/3/4'; ?>
<h3 id="4.3.5">4.3.5</h2><?php include '4/3/5'; ?>
<h3 id="4.3.6">4.3.6</h2><?php include '4/3/6'; ?>
<h3 id="4.3.7">4.3.7</h2><?php include '4/3/7'; ?>
<h3 id="4.3.8">4.3.8</h2><?php include '4/3/8'; ?>

      </main>
    </div>
  </div>
</body>

</html>
