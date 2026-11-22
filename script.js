const Data = [{
        id: 1,
        img: "./Assets/img2.png",
        Nom: "The Legend of Zelda Breath of the Wild",
        price: "59,99$",
        Description: "A groundbreaking action-adventure game where you play as Link, exploring the vast open world of Hyrule. With the freedom to approach tasks and puzzles in various ways, you must defeat Ganon to save Princess Zelda and restore peace to the land. The game features open-world exploration, puzzle-solving, combat, and a deeply immersive environment.",
    },
    {
        id: 2,
        img: "./Assets/img3.png",
        Nom: "Super Mario Odyssey",
        price: "59,99$",
        Description: "A colorful 3D platformer where Mario embarks on a global adventure to rescue Princess Peach from Bowser. Using his new friend Cappy, Mario can possess various objects and enemies, adding a unique twist to the classic platforming gameplay. The game is known for its creative level design and fun, varied worlds.",
    },
    {
        id: 3,
        img: "./Assets/img4.png",
        Nom: "Minecraft",
        price: " 26,95$",
        Description: "A sandbox game that lets players build, explore, and survive in a blocky, procedurally generated world. The game offers multiple modes, including creative (where players can freely build) and survival (where they must gather resources and fend off enemies). Its endless possibilities have made it one of the best-selling games ever.",
    },
    {
        id: 4,
        img: "./Assets/img5.png",
        Nom: "Red Dead Redemption 2",
        price: "39,99$",
        Description: "A story-driven open-world action game set in the late 1800s. You play as Arthur Morgan, a member of the Van der Linde gang, as you navigate the decline of the Old West. The game focuses on narrative-driven experiences, deep character development, stunning landscapes, and moral choices. It also has a vast and immersive world to explore.",
    },
    {
        id: 5,
        img: "./Assets/img6.png",
        Nom: "God of War (2018)",
        price: " 39,99$",
        Description: "A third-person action game where you control Kratos, the Greek god, as he navigates the world of Norse mythology with his son Atreus. The game is known for its cinematic storytelling, engaging combat system, and emotional depth. The father-son relationship is central to the game's narrative, blending mythological elements with human emotion.",
    },
    {
        id: 6,
        img: "./Assets/img7.png",
        Nom: "EA Sports FC 25",
        price: "69,99$",
        Description: "The latest installment in EA's sports football series, following the end of the FIFA branding. It features real-life teams, stadiums, and leagues, offering players the chance to engage in realistic football gameplay, including career modes, Ultimate Team, and online multiplayer.",
    },
    {
        id: 7,
        img: "./Assets/img8.png",
        Nom: "Monster Hunter: World",
        price: "39,99$",
        Description: "An action RPG where players take on the role of a 'Hunter' tasked with tracking down and slaying massive creatures in a vibrant, dynamic world. Players can craft weapons and armor from monster parts and work with friends in multiplayer mode to tackle the toughest challenges.",
    },
    {
        id: 8,
        img: "./Assets/img9.png",
        Nom: "Spider-Man: Miles Morales",
        price: "49,99$",
        Description: "A superhero action game where you play as Miles Morales, the new Spider-Man, taking on both classic villains and new threats. The game emphasizes Miles' unique powers, including invisibility and electricity-based attacks, with an open-world New York City to explore and plenty of web-swinging action.",
    },
    
];
const btn = document.getElementById("btn");
const searchTxt = document.getElementById("search-text");

console.log(Data);
const FiltredByName = (data) => {
    const Box = document.getElementById("products-box");

    Box.innerHTML = "";
    data
        .filter((e) =>
            e.Nom.toLocaleLowerCase().includes(searchTxt.value.toLocaleLowerCase())
        )

    .forEach((e) => {
        console.log(e);

        Box.innerHTML += `<figure>
        <img src="${e.img}" />
        <figcaption>
            ${e.Nom}<br /> ${e.price}
            <br />
            (+) Add to Cart
            <a href="/gamestorePHPversion/product.php?id=${e.id}">see more</a>
        </figcaption>
    </figure>`;
    });
};

FiltredByName(Data);

btn.addEventListener("click", () => {
    FiltredByName(Data);
});
