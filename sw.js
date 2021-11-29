const cacheName = 'WCG cache memory'
const staticAssest = [
    './index.php',
    './about.php',
    './services.php',
    './wcg.manifest',
]
self.addEventListener('install',async e =>{
    const cache = await caches.open(cacheName);
    await cache.addAll(staticAssest);
    return self.skipWaiting();
});

self.addEventListener('activate', e =>{
    self.clients.claim();
});

self.addEventListener('fetch',async e =>{
    const req = e.request;
    const url = new URL(req.url);

    if(url.origin === location.origin){
        e.respondWith(cacheFirst(req));
    }else{
        e.respondWith(networkAndCache(req))
    }
});
async function cacheFirst(req){
    const cache = await caches.open(cacheName);
    const cached = await cache.match(req)
    return cached || fetch(req);
}

async function networkAndCache(req){
    const cache = await fetch(req);
    try{
        const fresh = await fetch(req);
        return fresh
    }catch (e){
        const cached = await cache.match(req);
        return cached;
    }
}