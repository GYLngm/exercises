import { Component, OnInit, Input } from '@angular/core';

import { friends } from '../friends';
import { BackendService } from '../backend.service';

@Component({
  selector: 'app-friend-list',
  templateUrl: './friend-list.component.html',
  styleUrls: ['./friend-list.component.css']
})
export class FriendListComponent implements OnInit {
  friends;

  constructor(
    private service: BackendService
  ) { }

  ngOnInit() {
    this.friends = this.service.getFriends();
    console.log(this.friends)
  }

}
