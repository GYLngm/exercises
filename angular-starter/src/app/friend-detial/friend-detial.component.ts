import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { friends } from '../friends';

//import { friends } from '../friends/friends.component';

@Component({
  selector: 'app-friend-detial',
  templateUrl: './friend-detial.component.html',
  styleUrls: ['./friend-detial.component.css']
})
export class FriendDetialComponent implements OnInit {
  friend;

  constructor(
    private route: ActivatedRoute
  ) { }

  ngOnInit() {
    this.route.paramMap.subscribe( params => {
      this.friend = friends[+params.get('userId')];
    });
  }

}
