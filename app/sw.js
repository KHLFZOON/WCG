const cacheName = 'WCG cache memory'
const staticAssest = [
    './',
    './index.php',
    './about.php',
    './services.php',
    './app/wcg.manifest',
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
    const req = e.requist;
    const url = new URL(req.url);

    if(url.origin === location.origin){
        e.respondWith(cacheFirst(req));
    }else{
        e.respondWith(networkAndCache(req))
    }
});