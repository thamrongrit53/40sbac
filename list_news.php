<!DOCTYPE html>
<html>
<head>
	<title>list_news</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i');

* {
  font-family: Lato, sans-serif;
  box-sizing: border-box;
}

body {
  background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%);
}

.container {
  max-width: 948px;
  margin: 4em auto;
  padding: 4em;
  background: #fff;
  border-radius: 1em;
}

section.cards {
  margin: 0 auto;
  display: grid;
  grid-auto-flow: row dense;
  grid-template-columns: repeat(3, 256px);
  grid-template-rows: repeat(12, 196px);
  grid-gap: 16px;
}

.card {
  display: flex;
  border: 1px solid rgba(0, 0, 0, 0.1);
  //background: rgba(0, 0, 0, 0.05);
  transition: all 0.25s ease;
}

.card:hover {
  transform: scale(1.05);
}

.vertical {
  flex-direction: column;
  grid-row: span 2;
  grid-column: span 1;
}

.horizontal {
  flex-direction: row;
  grid-row: span 1;
  grid-column: span 2;
}

.reverse-horizontal {
  flex-direction: row-reverse;
  grid-row: span 1;
  grid-column: span 2;
}

//.card {
//  border-radius: 0.5em;
//}
// .horizontal.not(.reverse) img {
//   border-top-left-radius: 0.5em;
//   border-bottom-left-radius: 0.5em;
// }

// .horizontal-reverse img {
//   border-top-right-radius: 0.5em;
//   border-bottom-right-radius: 0.5em;
// }

// .vertical img {
//   border-top-left-radius: 0.5em;
//   border-top-right-radius: 0.5em;
// }

.horizontal .card__img, .reverse-horizontal .card__img {
  height: 100%;
}

.vertical .card__img {
  width: 100%;
}
.card__content {
  padding: 16px;
}

.card__type {
  font-variant: small-caps;
  letter-spacing: 2px;
  opacity: 0.9;
  color: palevioletred;
  padding-bottom: 0.5em;
}

.card__title {
  font-size: 18px;
  opacity: 0.8;
  font-weight: 700;
  padding-bottom: 0.5em;
  transition: all 0.25s ease;
}

.card__date {
  font-size: 14px;
  padding-bottom: 0.5em;
  opacity: 0.3;
}

.card__time-to-read {
  font-style: italic;  
}

.card__excerpt {
  font-size: 16px;
  padding-bottom: 0.5em;
}

.card__tags {
  margin-top: auto;
}

.tag {
  display: inline;
  background: papayawhip;
  padding: 0.5em;
  border-radius: 0.5em;
  font-size: 12px;
  color: palevioletred;
  user-select: none;
  cursor: pointer;
}

.tag:hover {
  background: darken(papayawhip, 5%);
}

.tag:active {
  background: darken(papayawhip, 10%);
}

.tag i {
  margin-right: 4px;
}
</style>
</head>
<body>
<div class="container">
  <h1> Blog </h1>
  <p> This is my blog! </h1>

  <section class="cards">
    <article class="horizontal card">
      <img class="card__img" src="https://picsum.photos/256/196/?image=321" class="card__image">
      <div class="card__content">
        <div class="card__type">article</div>
        <div class="card__title">
          Test Post: Electric Boogaloo
        </div>
        <div class="card__date">14 March 2011 &middot; <span class="card__time-to-read">5 min read</span></div>
        <div class="card__excerpt">
          This is a test article, in a perculiar context, to see whether grid and flexbox works to make a blog...
        </div>
      </div>
    </article>
   
  </section>
</div>
</body>
</html>