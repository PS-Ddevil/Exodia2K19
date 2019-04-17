function pad(n) {
    return (n < 10) ? ("0" + n) : n;
}

function print(doc, day, type){
    var x = day + type;
    var div_ = document.getElementById(x);
    var name = doc.data().name;
    var venue = doc.data().venue;
    var start = pad(doc.data().start.toDate().getHours()) + ':'+ pad(doc.data().start.toDate().getMinutes());
    var end = doc.data().end.toDate().getHours() + ':'+ pad(doc.data().end.toDate().getMinutes());
    var data = "<tr>" + "<td>" + name + "</td>" + "<td>" + venue + "</td>" + "<td>" + start + "</td>" + "<td>" + end + "</td>" + "</tr>";
    div_.innerHTML += data;
}

db.collection('day1').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d1", "_cult");
    });
});

db.collection('day1_t').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d1", "_tech");
    });
});

// db.collection('day1_w').orderBy("start").onSnapshot(function(querySnapshot){
//     x = querySnapshot.docs.length;
//     querySnapshot.forEach(function(doc) {
//         print(doc, "d1", "_work");
//     });
// });

db.collection('day2_c').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d2", "_cult");
    });
});

db.collection('day2_t').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d2", "_tech");
    });
});

db.collection('day2_w').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d2", "_work");
    });
});

db.collection('day3_c').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d3", "_cult");
    });
});

db.collection('day3_t').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d3", "_tech");
    });
});


db.collection('day3_w').orderBy("start").onSnapshot(function(querySnapshot){
    x = querySnapshot.docs.length;
    querySnapshot.forEach(function(doc) {
        print(doc, "d3", "_work");
    });
});

setTimeout(function(){
    $('#loader').hide();
    $('#back').hide();
	$('.main_bdy').show();
}, 2000);