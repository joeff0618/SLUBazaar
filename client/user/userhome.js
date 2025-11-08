const auctions = [
  {
    name: "Yellow Boots",
    img: "../assets/img/YellowBoots.png",
    price: 1000,
    time: "04:00:59",
    desc: "Classic yellow rain boots for everyday use.",
    bids: [
      { user: "user1", date: "1/1/1", bid: "₱100" },
      { user: "user2", date: "1/1/1", bid: "₱50" },
    ],
    isBidded: true,
    isWatchlisted: true,
  },
  {
    name: "Vintage Camera",
    img: "../assets/img/Camera.png",
    price: 2500,
    time: "01:30:00",
    desc: "A collectible film camera in mint condition.",
    bids: [{ user: "user3", date: "1/2/1", bid: "₱2500" }],
    isBidded: false,
    isWatchlisted: false,
  },
];

const container = document.getElementById("auction-container");
const modal = document.getElementById("item-modal");
const closeModal = document.getElementById("close-modal");
const tabs = document.querySelectorAll(".tab");
let activeTab = "live";

// Render auctions
function renderAuctions() {
  container.innerHTML = "";
  
  let filteredItems = [];
  if (activeTab === "live") filteredItems = auctions;
  else if (activeTab === "bids")
    filteredItems = auctions.filter(a => a.isBidded);
  else if (activeTab === "watchlist")
    filteredItems = auctions.filter(a => a.isWatchlisted);

  if (filteredItems.length === 0) {
    container.innerHTML = `<p style="text-align:center; color:#555; margin-top:1rem;">No items found in this section.</p>`;
    return;
  }

  filteredItems.forEach((item, index) => {
    const card = document.createElement("div");
    card.className = "auction-card";
    card.innerHTML = `
      <img src="${item.img}" alt="${item.name}">
      <h3>${item.name}</h3>
      <p>₱${item.price}</p>
      <small>⏰ ${item.time}</small>
    `;
    card.addEventListener("click", () => openModal(index));
    container.appendChild(card);
  });
}

function openModal(index) {
  const item = auctions[index];
  modal.style.display = "flex";

  document.getElementById("main-img").src = item.img;
  document.getElementById("item-name").textContent = item.name;
  document.getElementById("current-bid").textContent = item.price;
  document.getElementById("next-bid").textContent = item.price + 100;
  document.getElementById("time-left").textContent = item.time;
  document.getElementById("item-desc").textContent = item.desc;

  const bidHistory = document.getElementById("bid-history-list");
  bidHistory.innerHTML = "";
  item.bids.forEach(b => {
    const div = document.createElement("div");
    div.classList.add("bid-entry");
    div.innerHTML = `
      <div style="display:flex;align-items:center;gap:10px;margin-bottom:5px;">
        <img src="../assets/img/catpfp.png" alt="pfp" style="width:40px;height:40px;border-radius:50%;">
        <div>
          <strong>${b.user}</strong><br>
          <small>${b.date}</small>
        </div>
        <span style="margin-left:auto;font-weight:bold;">${b.bid}</span>
      </div>
    `;
    bidHistory.appendChild(div);
  });
}

closeModal.addEventListener("click", () => {
  modal.style.display = "none";
});

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    tabs.forEach(t => t.classList.remove("active"));
    tab.classList.add("active");
    activeTab = tab.dataset.tab;
    renderAuctions();
  });
});

renderAuctions();
