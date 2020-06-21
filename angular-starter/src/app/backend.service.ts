import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class BackendService {

  constructor(
    private http: HttpClient,
  ) { }

  getFriends(){
    return this.http.get('http://localhost:8015/web/index.php?getfriends=1');
  }
}
