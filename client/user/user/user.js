
const user = {
  name: "Chris",
  rating: 4,
  image: "../assets/img/Christian_Profile.png"
};


const listings = {
  active: [
    { name: "Yellow Boots", price: 1000, time: "04:00:59", img: "../assets/img/YellowBoots.png" },
    { name: "Blue Jacket", price: 750, time: "02:15:30", img: "../assets/img/BlueJacket.png" },
  ],
  sold: [
    { id: "001", name: "boot", status: "Outbid", price: 10000, img: "../assets/img/YellowBoots.png" },
    { id: "002", name: "boot1", status: "Won", price: 99999, img: "../assets/img/YellowBoots.png" }
  ],
 
};




document.getElementById("username").textContent = user.name;
document.querySelector(".stars").textContent =
  "⭐".repeat(user.rating) + "☆".repeat(5 - user.rating);
document.getElementById("profile-pic").src = user.image;

//TAB SWITCHING 
const tabs = document.querySelectorAll(".tab");
const container = document.getElementById("listing-container");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    tabs.forEach(t => t.classList.remove("active"));
    tab.classList.add("active");
    renderListings(tab.dataset.tab);
  });
});

//  RENDER LISTINGS 
function renderListings(type) {
  container.innerHTML = "";

  if (type === "sold") {
   
    container.classList.remove("listing-grid");
    container.innerHTML = `
      <table class="sold-table">
        <thead>
          <tr>
            <th>Item</th>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Status</th>
            <th>Submitted Bid</th>
          </tr>
        </thead>
        <tbody id="sold-body"></tbody>
      </table>
    `;

    const tbody = document.getElementById("sold-body");
    listings.sold.forEach((item, index) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td><img src="${item.img}" alt="${item.name}"></td>
        <td>00${index + 1}</td>
        <td>${item.name}</td>
        <td>
          <span class="status ${item.status === "Won" ? "won" : "outbid"}">
            ${item.status}
          </span>
        </td>
        <td>₱${item.price.toLocaleString()}</td>
      `;
      tbody.appendChild(row);
    });
  } 
  
  // For active and bids
  else {
    container.classList.add("listing-grid");
    listings[type].forEach(item => {
      const card = document.createElement("div");
      card.classList.add("listing-card");
      card.innerHTML = `
        <img src="${item.img}" alt="${item.name}">
        <h3>${item.name}</h3>
        <p>₱${item.price}</p>
        ${item.time ? `<small>⏰ ${item.time}</small>` : ""}
      `;
      container.appendChild(card);
    });
  }
}


//SEARCH FUNCTIONALITY 
document.getElementById("search").addEventListener("input", e => {
  const term = e.target.value.toLowerCase();
  const activeTab = document.querySelector(".tab.active").dataset.tab;
  const filtered = listings[activeTab].filter(item =>
    item.name.toLowerCase().includes(term)
  );
  container.innerHTML = "";
  filtered.forEach(item => {
    const card = document.createElement("div");
    card.classList.add("listing-card");
    card.innerHTML = `
      <img src="${item.img}" alt="${item.name}">
      <h3>${item.name}</h3>
      <p>₱${item.price}</p>
      ${item.time ? `<small>⏰ ${item.time}</small>` : ""}
    `;
    container.appendChild(card);
  });
});

// EDIT PROFILE MODAL
const modal = document.getElementById("edit-modal");
document.getElementById("edit-profile-btn").addEventListener("click", () => {
  modal.style.display = "flex";
});
document.getElementById("cancel-profile").addEventListener("click", () => {
  modal.style.display = "none";
});
document.getElementById("save-profile").addEventListener("click", () => {
  const newName = document.getElementById("edit-name").value;
  const newImage = document.getElementById("edit-image").files[0];
  if (newName) user.name = newName;
  if (newImage) {
    const reader = new FileReader();
    reader.onload = e => {
      user.image = e.target.result;
      document.getElementById("profile-pic").src = user.image;
    };
    reader.readAsDataURL(newImage);
  }
  document.getElementById("username").textContent = user.name;
  modal.style.display = "none";
});

//SIDEBAR CLICK SIMULATION 
document.querySelectorAll(".sidebar a").forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    alert(`Navigating to: ${link.id.replace("-link", "").toUpperCase()} page`);
  });
});
