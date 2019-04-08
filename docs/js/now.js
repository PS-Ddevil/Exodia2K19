var time_now = new Date();

function eve_now(data){
    detail = data.name + ' in ' + data.venue + '<br>';
    document.getElementById('output').innerHTML = detail;
}

db.collection('day1').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day1_t').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day1_w').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
});

db.collection('day2_c').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day2_t').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day2_w').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day3_c').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day3_t').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

db.collection('day3_w').where('end', '>=', time_now).onSnapshot(function(querySnapshot){
    querySnapshot.forEach(function(doc){
        x = doc.data().start.toMillis();
        y = time_now.getTime();
        if(x <= y) eve_now(doc.data());
    });
}); 

var no_eve = document.getElementById('output').innerHTML;
if(no_eve == '') document.getElementById('output').innerHTML = "<i> No event currently running!! <i>"