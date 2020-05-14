import { TestBed } from '@angular/core/testing';

import { HelpmeService } from './helpme.service';

describe('HelpmeService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: HelpmeService = TestBed.get(HelpmeService);
    expect(service).toBeTruthy();
  });
});
