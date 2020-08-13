var b = document.getElementById('main-body');

function openLogin() {
    b.classList.toggle('show-login');
}

function closeLogin() {
    b.classList.remove('show-login');
}

function openSizeGuide() {
    b.classList.toggle('show-size-guide');
}

function closeSizeGuide() {
    b.classList.remove('show-size-guide');
}

function openMenu() {
    b.classList.toggle('open-menu');
}

function openSearch() {
    b.classList.toggle('open-search');
}

// search suggest
function showSearch() {
    if (document.getElementById('search-text').value.length > 1) {
        document.getElementById('result-suggest').style.display = 'block';
    } else {
        document.getElementById('result-suggest').style.display = 'none';
    }
}

function openFillterList() {
    document.getElementById('filterList').classList.toggle('open-list')
}

function selectFilter(lis) {
    var selectFilterText = document.getElementById("filterChoose");
    selectFilterText.innerHTML = lis.textContent;
    document.getElementById('filterList').classList.toggle('open-list');
}

function changeImage(imgs) {
    var imgBtn = document.getElementsByClassName('thumbnail');
    var expandImg = document.getElementById("expandedImg");

    for (var i = 0; i < imgBtn.length; i++) {
        imgBtn[i].addEventListener('click', function() {
            for (var x=0; x < imgBtn.length; x++) {
                if (x != i) {
                    imgBtn[x].parentElement.classList.remove('active');
                }
            }
            this.parentElement.classList.add('active');
        });
    }
    expandImg.src = imgs.src;
}

function openTab(evt, openTab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(openTab).style.display = "block";
    evt.currentTarget.className += " active";
}

// change address
function changeAddress(change) {
    var addressDefault = document.getElementById("address-default");
    var editAddress = document.getElementById("edit-address");
    var changeBtn = document.getElementById("default-button");
    var addAddress = document.getElementById("add-address");

    addressDefault.classList.toggle('hidden');
    editAddress.classList.toggle('hidden');
    change.classList.toggle('hidden');
    addAddress.classList.toggle('show-edit');
}

function saveButton() {
    var addressDefault = document.getElementById("address-default");
    var editAddress = document.getElementById("edit-address");
    var changeBtn = document.getElementById("default-button");
    var addAddress = document.getElementById("add-address");
    var changeAddress = document.getElementById("change-address");

    addressDefault.classList.toggle('hidden');
    editAddress.classList.toggle('hidden');
    changeAddress.classList.toggle('hidden');
    addAddress.classList.toggle('show-edit');
}
function cancelButton() {
    var addressDefault = document.getElementById("address-default");
    var editAddress = document.getElementById("edit-address");
    var changeBtn = document.getElementById("default-button");
    var addAddress = document.getElementById("add-address");
    var changeAddress = document.getElementById("change-address");

    addressDefault.classList.toggle('hidden');
    editAddress.classList.toggle('hidden');
    changeAddress.classList.toggle('hidden');
    addAddress.classList.toggle('show-edit');
}

function openFormAddAddress() {
    b.classList.toggle('show-add-address');
}
function closeForm() {
    b.classList.toggle('show-add-address');
}
function openFilter() {
    b.classList.toggle('open-filter');
}

document.addEventListener("keydown", function(event) {
    if(event.keyCode === 27){
        var esc = document.getElementById('account-login');
        esc.classList.remove('show-login');
        document.getElementById('result-suggest').style.display = 'none';
    }
});
