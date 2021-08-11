//initialize the news paramenters
let source = 'bbc-news';
let apiKey = '914a3c45c8c0407bb7840d4ad205b126'

//grab the news contaner
const newsAccordion = document.getElementById('newsAccordion');

//create an ajax get request


const xhr = new XMLHttpRequest();

xhr.open('GET', `https://newsapi.org/v2/top-headlines?sources=${source}&apiKey=${apiKey}`,
    true);

xhr.getResponseHeader('Content-type', 'application/json')


//what to do when the response is ready
xhr.onload = function () {
    if (this.status === 200) {
        let json = JSON.parse(this.responseText);
        let articles = json.articles;
        //console.log(articles);

        //   console.log(json);

        let newsHTML = '';
        articles.forEach((element, index) => {
            //  console.log(index);
            news = `
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-heading${index}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapse${index}" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapse${index}">
                                <b>Breaking News ${index+1}: &nbsp</b>${element['title']}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse${index}" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-heading${index}">
                            <div class="accordion-body">
                            ${element['description']}.<a href="${element['url']}" target="_blank">Read more here</a>
                            </div>
                        </div>
                    </div>
                `;
            newsHTML += news;
            //console.log(element);
            newsAccordion.innerHTML = newsHTML;
        });

    } else {
        console.log('Some error occured');
    }
    const search = document.getElementById('searchText');
    const submit = document.getElementById('submit')

    submit.addEventListener("click", () => {
        // console.log("Input event fired.");

        let inputval = search.value.toLowerCase;
        console.log('Input value = ', inputval);


        let newsCard = document.getElementsByClassName('accordion-item');

        Array.from(newsCard).forEach((element) => {
            let newsTitle = element.getElementsByTagName('button')[0].innerText

            if (newsTitle.includes(inputval)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
            console.log(newsTitle);
        })

    })
}
xhr.send();