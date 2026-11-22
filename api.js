document.addEventListener("DOMContentLoaded",() => {
    const apiKey ="4816afc4b6eba383986e1c03c2e05f14";
    const city = "Tunisia";

    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric&lang=fr`)
    .then(response => response.json())
    .then(data => {
        const temp = data.main.temp;
        const description = data.weather[0].description;
        const icon = data.weather[0].icon;
        document.getElementById("weather").innerHTML = `
        <p>${city}: ${description}</p>
        <img src="https://openweathermap.org/img/wn/${icon}@2x.png" alt"weather icon">`;
    })
    .catch(error => console.log("erreur meteo:",error));
});


  const API_KEY = "633ac10be5ef41aa9fea310f68367659";
  const newsContainer = document.getElementById("news-container");

  fetch(`https://newsapi.org/v2/everything?q=video+games&language=fr&sortBy=publishedAt&pageSize=5&apiKey=${API_KEY}`)
    .then(res => res.json())
    .then(data => {
      if (data.articles) {
        data.articles.forEach(article => {
          newsContainer.innerHTML += `
            <div class="col-md-4">
              <div class="card h-100">
                <img src="${article.urlToImage || ''}" class="card-img-top" alt="Image">
                <div class="card-body">
                  <h5 class="card-title">${article.title}</h5>
                  <p class="card-text">${article.description || ''}</p>
                  <a href="${article.url}" target="_blank" class="btn btn-primary btn-sm">Lire plus</a>
                </div>
              </div>
            </div>
          `;
        });
      } else {
        newsContainer.innerHTML = "<p>Aucune actualité trouvée.</p>";
      }
    })
    .catch(err => {
      newsContainer.innerHTML = "<p>Erreur lors du chargement des actualités.</p>";
      console.error(err);
    });
