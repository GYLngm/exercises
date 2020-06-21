import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { friends } from '../friends';

//import { friends } from '../friends/friends.component';

@Component({
  selector: 'app-friend-detail',
  templateUrl: './friend-detail.component.html',
  styleUrls: ['./friend-detail.component.css']
})
export class FriendDetailComponent implements OnInit {
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
