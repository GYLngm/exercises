import { Component, OnInit, Input } from '@angular/core';

import { friends } from '../friends';

@Component({
  selector: 'app-friend-list',
  templateUrl: './friend-list.component.html',
  styleUrls: ['./friend-list.component.css']
})
export class FriendListComponent implements OnInit {
  friends = friends;

  constructor() { }

  ngOnInit() {

  }

}
